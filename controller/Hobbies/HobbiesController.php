<?php

    include_once '../model/Hobbies/HobbiesModel.php';

    class HobbiesController{
        public function getInsert(){

            $obj=new HobbiesModel();

            $sql="SELECT * FROM hobbies";

            $hobbies=$obj ->consult($sql);

            include_once '../view/Hobbies/insert.php';

        }

        public function postInsert(){

            $obj=new HobbiesModel();
            
            $hob_nombre=$_POST['hob_nombre'];
            $hob_id=$obj->autoincrement("hob_id","hobbies");

            $sql="INSERT INTO roles VALUES ($hob_id,'$hob_nombre')";

            $ejecutar=$obj->insert($sql);

            if($ejecutar){

               echo redirect(getUrl("Hobbies","Hobbies","getInsert"));

            }else{

                echo "Uy, hubo un error";

            }

        }

        public function consult(){
            $obj= new HobbiesModel();

            $sql="SELECT * FROM hobbies";
            $hobbies=$obj->consult($sql);

            include_once '../view/Hobbies/consult.php';
        }

        public function getUpdate(){
            $obj=new HobbiesModel();

            $hob_id=$_GET['hob_id'];

            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies=$obj->consult($sql);

            include_once "../view/Hobbies/update.php";
        }

        public function postUpdate(){

            $obj =new HobbiesModel();

            $hob_id=$_POST['hob_id'];

            $hob_nombre=$_POST['hob_nombre'];

            $sql="UPDATE hobbies SET hob_nombre='$hob_nombre' WHERE hob_id=$hob_id";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {

            echo redirect(getUrl("Hobbies","Hobbies","consult"));

            } else {
                echo "Uy, hubo un error";
            }
        }

        public function getDelete(){
            $obj=new HobbiesModel();

            $hob_id=$_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies=$obj->consult($sql);
            include_once '../view/Hobbies/delete.php'; 
        }

        public function postDelete(){
            $obj=new HobbiesModel();

            $hob_id=$_POST['hob_id'];
            $sql="DELETE FROM hobbies WHERE hob_id=$hob_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Hobbies","Hobbies","consult"));
            }else {
                echo "Se presentó un error en la ejecucion";
            }

        }
    }


?>