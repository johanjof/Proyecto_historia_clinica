<?php

include_once './model/Paciente/PacienteModel.php';

class PacienteController{
    public function getInsert(){
        $obj = new PacienteModel();

        $sql = "SELECT * FROM generos";
        $generos = $obj->consult($sql);

        $sql = "SELECT * FROM estratos";
        $estratos = $obj->consult($sql);
        
        $sql = "SELECT * FROM hobbies";
        $hobbies = $obj->consult($sql);

        include_once './view/Paciente/insert.php';
    }

    public function postInsert(){
        $obj = new PacienteModel();
        $pac_nombre = $_POST['pac_nombre'];
        $pac_correo = $_POST['pac_correo'];
        $pac_apellido = $_POST['pac_apellido'];
        $pac_direccion = $_POST['pac_direccion'];
        $pac_telefono = $_POST['pac_telefono'];
        $gen_id = $_POST['gen_id'];
        $pac_id = $obj->autoincrement("pac_id", "paciente");
        $estr_id = $_POST['estr_id'];

        $sql = "INSERT INTO paciente (pac_id, pac_nombre, pac_correo, pac_apellido, pac_direccion, pac_telefono, gen_id, estr_id) 
                VALUES ($pac_id, '$pac_nombre', '$pac_correo', '$pac_apellido', '$pac_direccion', $pac_telefono, $gen_id, $estr_id)";
        $ejecutar = $obj->insert($sql);

        if($ejecutar){
            $hobbies = $_POST['hobbie'];
            foreach ($hobbies as $hob){
                $id2 = $obj->autoincrement("pac_hob_id", "paciente_hobbies");
                $sql2 = "INSERT INTO paciente_hobbies (pac_hob_id, pac_id, hob_id) VALUES ($id2, $pac_id, $hob)";
                $ci = $obj->insert($sql2);
            }
            ?>
            <script>
                alert("Se registró correctamente");
            </script>
            <?php 
            echo redirect(getUrl("Paciente", "Paciente", "Consult"));
        } else {
            ?>
            <script>
                alert("No se efectuó el registro");
            </script>
            <?php
            echo redirect(getUrl("Paciente", "Paciente", "Consult"));
        } 
    }

    public function consult(){
        $obj = new PacienteModel();

        $sql = "SELECT * FROM paciente";
        $paciente = $obj->consult($sql);

        include_once './view/Paciente/consult.php';
    }

    public function verDetalle(){
        $obj = new PacienteModel();

        $pac_id = $_GET['pac_id'];
        $sql = "SELECT * FROM paciente WHERE pac_id = $pac_id"; 
        $paciente = $obj->consult($sql);

        $sql = "SELECT pac_id, hob.hob_id, hob.hob_nombre
                FROM hobbies hob
                INNER JOIN paciente_hobbies hob_rel ON hob_rel.hob_id = hob.hob_id
                WHERE pac_id = $pac_id";
        $paciente_hob = $obj->consult($sql);

        $sql = "SELECT * FROM generos";
        $generos = $obj->consult($sql);

        $sql = "SELECT * FROM estratos";
        $estratos = $obj->consult($sql);
        
        $sql = "SELECT * FROM hobbies";
        $hobbies = $obj->consult($sql);

        include_once './view/Paciente/verDetalle.php';
    }

    public function getUpdate(){
        $obj = new PacienteModel();

        $pac_id = $_GET['pac_id'];

        $sql = "SELECT * FROM paciente WHERE pac_id = $pac_id";
        $paciente = $obj->consult($sql);

        $sql = "SELECT DISTINCT(hobs.hob_id), hobs.hob_nombre,
                    IF(tmp.hob_nombre IS NULL,' ','checked') as chulo
                FROM hobbies hobs 
                LEFT JOIN (SELECT pac_id, hob.hob_id, hob.hob_nombre 
                            FROM hobbies hob 
                            INNER JOIN paciente_hobbies hob_rel ON hob_rel.hob_id = hob.hob_id 
                            WHERE hob_rel.pac_id = $pac_id) tmp 
                ON tmp.pac_id = $pac_id AND tmp.hob_id = hobs.hob_id 
                GROUP BY hobs.hob_nombre
                ORDER BY hobs.hob_id ASC";

        $paciente_hob = $obj->consult($sql);

        $sql = "SELECT * FROM generos";
        $generos = $obj->consult($sql);

        $sql = "SELECT * FROM estratos";
        $estratos = $obj->consult($sql);
        
        $sql = "SELECT * FROM hobbies";
        $hobbies = $obj->consult($sql);

        include_once "./view/Paciente/update.php";
    }

    public function postUpdate(){
        $obj = new PacienteModel();

        $pac_id = $_POST['pac_id'];
        $pac_nombre = $_POST['pac_nombre'];
        $pac_correo = $_POST['pac_correo'];
        $pac_apellido = $_POST['pac_apellido'];
        $pac_direccion = $_POST['pac_direccion'];
        $pac_telefono = $_POST['pac_telefono'];
        $gen_id = $_POST['gen_id'];
        $estr_id = $_POST['estr_id'];

        $sql = "UPDATE paciente SET 
                    pac_nombre = '$pac_nombre',
                    pac_correo = '$pac_correo',
                    pac_apellido = '$pac_apellido',
                    pac_direccion = '$pac_direccion',
                    pac_telefono = $pac_telefono,
                    gen_id = $gen_id,
                    estr_id = $estr_id 
                WHERE pac_id = $pac_id";
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $sql = "DELETE FROM paciente_hobbies WHERE pac_id = $pac_id";
            $obj->delete($sql);  

            $hobbies = $_POST['hobbie'];
            foreach ($hobbies as $hob){
                $id2 = $obj->autoincrement("pac_hob_id", "paciente_hobbies");
                $sql2 = "INSERT INTO paciente_hobbies (pac_hob_id, pac_id, hob_id) VALUES ($id2, $pac_id, $hob)";
                $ci = $obj->insert($sql2);
            }
            ?>
            <script>
                alert("Se editó correctamente");
            </script>
            <?php
            echo redirect(getUrl("Paciente", "Paciente", "consult"));
        } else {
            ?>
            <script>
                alert("No se efectuó el registro");
            </script>
            <?php
            echo redirect(getUrl("Paciente", "Paciente", "Consult"));
        }
    }

    public function getDelete(){
        $obj = new PacienteModel();

        $pac_id = $_GET['pac_id'];
        $sql = "SELECT * FROM paciente WHERE pac_id = $pac_id"; 
        $paciente = $obj->consult($sql);

        $sql = "SELECT pac_id, hob.hob_id, hob.hob_nombre
                FROM hobbies hob
                INNER JOIN paciente_hobbies hob_rel ON hob_rel.hob_id = hob.hob_id
                WHERE pac_id = $pac_id";
        $paciente_hob = $obj->consult($sql);

        $sql = "SELECT * FROM generos";
        $generos = $obj->consult($sql);

        $sql = "SELECT * FROM estratos";
        $estratos = $obj->consult($sql);
        
        $sql = "SELECT * FROM hobbies";
        $hobbies = $obj->consult($sql);
        include_once './view/Paciente/delete.php'; 
    }

    public function postDelete(){
        $obj = new PacienteModel();

        $pac_id = $_POST['pac_id'];
        $sql = "DELETE FROM paciente_hobbies WHERE pac_id = $pac_id";
        $obj->delete($sql);
        $sql = "DELETE FROM paciente WHERE pac_id = $pac_id";
        $ejecutar = $obj->delete($sql);
        if ($ejecutar) {
            ?>
            <script>
                alert("Se eliminó correctamente");
            </script>
            <?php 
            redirect(getUrl("Paciente", "Paciente", "consult"));
        } else {
            ?>
            <script>
                alert("No se efectuó el registro");
            </script>
            <?php
            echo redirect(getUrl("Paciente", "Paciente", "Consult"));
        }
    }
}
?>
