<?php

    include_once '../model/Paciente/PacienteModel.php';

    class PacienteController{
        public function getInsert(){

            $obj=new PacienteModel();

            $sql="SELECT * FROM paciente";

            $paciente=$obj ->consult($sql);

            include_once '../view/Paciente/insert.php';

        }

        public function postInsert(){

            $obj=new PacienteModel();
            
            $pac_nombre=$_POST['pac_nombre'];
            $hobbies=$_POST['hobbies'];
            $pac_id=$obj->autoincrement("pac_id","paciente");

            $sql="INSERT INTO roles VALUES ($pac_id,'$pac_nombre','$bbies')";

            $ejecutar=$obj->insert($sql);

            if($ejecutar){

               echo redirect(getUrl("Paciente","Paciente","getInsert"));

            }else{

                echo "Uy, hubo un error";

            }

        }

        public function consult(){
            $obj= new PacienteModel();

            $sql="SELECT * FROM paciente";
            $paciente=$obj->consult($sql);

            include_once '../view/paciente/consult.php';
        }

        public function verDetalle(){
            $obj= new PacienteModel();

            $sql="SELECT * FROM paciente";
            $paciente=$obj->consult($sql);

            include_once '../view/paciente/verDetalle.php';
        }

        public function getUpdate(){
            $obj=new PacienteModel();

            $pac_id=$_GET['pac_id'];

            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id";
            $paciente=$obj->consult($sql);

            include_once "../view/Paciente/update.php";
        }

        public function postUpdate(){

            $obj =new PacienteModel();

            $pac_id=$_POST['pac_id'];

            $pac_nombre=$_POST['pac_nombre'];

            $sql="UPDATE paciente SET pac_nombre='$pac_nombre' WHERE pac_id=$pac_id";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {

            echo redirect(getUrl("Paciente","Paciente","consult"));

            } else {
                echo "Uy, hubo un error";
            }
        }

        public function getDelete(){
            $obj=new PacienteModel();

            $pac_id=$_GET['pac_id'];
            $sql="SELECT * FROM paciente WHERE pac_id=$pac_id";
            $paciente=$obj->consult($sql);
            include_once '../view/Paciente/delete.php'; 
        }

        public function postDelete(){
            $obj=new PacienteModel();

            $pac_id=$_POST['pac_id'];
            $sql="DELETE FROM paciente WHERE pac_id=$pac_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Paciente","Paciente","consult"));
            }else {
                echo "Se presentó un error en la ejecucion";
            }

        }
    }


?>