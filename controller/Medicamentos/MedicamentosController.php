<?php

    include_once '../model/Medicamentos/MedicamentosModel.php';

    class MedicamentosController{
        public function getInsert(){

            $obj=new MedicamentosModel();

            $sql="SELECT * FROM medicamentos";

            $medicamentos=$obj ->consult($sql);

            include_once '../view/Medicamentos/insert.php';

        }

        public function postInsert(){

            $obj=new MedicamentosModel();
            
            $med_nombre=$_POST['med_nombre'];
            $med_id=$obj->autoincrement("med_id","medicamentos");

            $sql="INSERT INTO medicamentos VALUES ($med_id,'$med_nombre')";

            $ejecutar=$obj->insert($sql);

            if($ejecutar){

               echo redirect(getUrl("Medicamentos","Medicamentos","getInsert"));

            }else{

                echo "Uy, hubo un error";

            }

        }

        public function consult(){
            $obj= new MedicamentosModel();

            $sql="SELECT * FROM medicamentos";
            $medicamentos=$obj->consult($sql);

            include_once '../view/Medicamentos/consult.php';
        }

        public function getUpdate(){
            $obj=new MedicamentosModel();

            $med_id=$_GET['med_id'];

            $sql="SELECT * FROM medicamentos WHERE med_id=$med_id";
            $medicamentos=$obj->consult($sql);

            include_once "../view/Medicamentos/update.php";
        }

        public function postUpdate(){

            $obj =new MedicamentosModel();

            $med_id=$_POST['med_id'];

            $med_nombre=$_POST['med_nombre'];

            $sql="UPDATE medicamentos SET med_nombre='$med_nombre' WHERE med_id=$med_id";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {

            echo redirect(getUrl("Medicamentos","Medicamentos","consult"));

            } else {
                echo "Uy, hubo un error";
            }
        }

        public function getDelete(){
            $obj=new MedicamentosModel();

            $med_id=$_GET['med_id'];
            $sql="SELECT * FROM medicamentos WHERE med_id=$med_id";
            $medicamentos=$obj->consult($sql);
            include_once '../view/Medicamentos/delete.php'; 
        }

        public function postDelete(){
            $obj=new MedicamentosModel();

            $med_id=$_POST['med_id'];
            $sql="DELETE FROM medicamentos WHERE med_id=$med_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Medicamentos","Medicamentos","consult"));
            }else {
                echo "Se presentó un error en la ejecucion";
            }

        }
    }


?>