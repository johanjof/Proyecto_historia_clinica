<?php

    include_once '../model/Roles/RolesModel.php';

    class RolesController{
        public function getInsert(){

            $obj=new RolesModel();

            $sql="SELECT * FROM roles";

            $roles=$obj ->consult($sql);

            include_once '../view/Roles/insert.php';

        }

        public function postInsert(){

            $obj=new RolesModel();
            
            $rol_nombre=$_POST['rol_nombre'];
            $rol_id=$obj->autoincrement("rol_id","roles");

            $sql="INSERT INTO roles VALUES ($rol_id,'$rol_nombre')";

            $ejecutar=$obj->insert($sql);

            if($ejecutar){

               echo redirect(getUrl("Roles","Roles","getInsert"));

            }else{

                echo "Uy, hubo un error";

            }

        }

        public function consult(){
            $obj= new RolesModel();

            $sql="SELECT * FROM roles";
            $roles=$obj->consult($sql);

            include_once '../view/Roles/consult.php';
        }

        public function getUpdate(){
            $obj=new RolesModel();

            $rol_id=$_GET['rol_id'];

            $sql="SELECT * FROM roles WHERE rol_id=$rol_id";
            $roles=$obj->consult($sql);

            include_once "../view/Roles/update.php";
        }

        public function postUpdate(){

            $obj =new RolesModel();

            $rol_id=$_POST['rol_id'];

            $rol_nombre=$_POST['rol_nombre'];

            $sql="UPDATE roles SET rol_nombre='$rol_nombre' WHERE rol_id=$rol_id";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {

            echo redirect(getUrl("Roles","Roles","consult"));

            } else {
                echo "Uy, hubo un error";
            }
        }

        public function getDelete(){
            $obj=new RolesModel();

            $rol_id=$_GET['rol_id'];
            $sql="SELECT * FROM roles WHERE rol_id=$rol_id";
            $roles=$obj->consult($sql);
            include_once '../view/Roles/delete.php'; 
        }

        public function postDelete(){
            $obj=new RolesModel();

            $rol_id=$_POST['rol_id'];
            $sql="DELETE FROM roles WHERE rol_id=$rol_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Roles","Roles","consult"));
            }else {
                echo "Se presentó un error en la ejecucion";
            }

        }
    }


?>