<?php

    include_once './model/Hobbies/HobbiesModel.php';

    class HobbiesController{
        public function getInsert(){

            $obj=new HobbiesModel();

            $sql="SELECT * FROM hobbies";

            $hobbies=$obj ->consult($sql);

            include_once './view/Hobbies/insert.php';

        }

        public function postInsert(){

            $obj=new HobbiesModel();
            
            $hob_nombre=$_POST['hob_nombre'];
            $hob_id=$obj->autoincrement("hob_id","hobbies");

            $sql="INSERT INTO hobbies VALUES ($hob_id,'$hob_nombre')";

            $ejecutar=$obj->insert($sql);

            if($ejecutar){
                ?>
                <script>
          alert("Se registro correctamente");
            
          </script>
          
    
               <?php 

               echo redirect(getUrl("Hobbies","Hobbies","consult"));

            }else{
                ?>
                <script>
         alert("No se efectuo el registro");
           
         </script>
         <?php
                redirect(getUrl("Hobbies","Hobbies","consult"));
               

            }

        }

        public function consult(){
            $obj= new HobbiesModel();

            $sql="SELECT * FROM hobbies";
            $hobbies=$obj->consult($sql);

            include_once './view/Hobbies/consult.php';
        }

        public function getUpdate(){
            $obj=new HobbiesModel();

            $hob_id=$_GET['hob_id'];

            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies=$obj->consult($sql);

            include_once "./view/Hobbies/update.php";
        }

        public function postUpdate(){

            $obj =new HobbiesModel();

            $hob_id=$_POST['hob_id'];

            $hob_nombre=$_POST['hob_nombre'];

            $sql="UPDATE hobbies SET hob_nombre='$hob_nombre' WHERE hob_id=$hob_id";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                ?>
                <script>
         alert("Se editó correctamente");
           
         </script>
         <?php

            echo redirect(getUrl("Hobbies","Hobbies","consult"));

            } else {
                ?>
                <script>
         alert("No se efectuo el registro");
           
         </script>
         <?php
                redirect(getUrl("Hobbies","Hobbies","consult"));
                
            }
        }

        public function getDelete(){
            $obj=new HobbiesModel();

            $hob_id=$_GET['hob_id'];
            $sql="SELECT * FROM hobbies WHERE hob_id=$hob_id";
            $hobbies=$obj->consult($sql);
            include_once './view/Hobbies/delete.php'; 
        }

        public function postDelete(){
            $obj=new HobbiesModel();

            $hob_id=$_POST['hob_id'];
            $sql="DELETE FROM hobbies WHERE hob_id=$hob_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                ?>
                <script>
          alert("Se eliminó correctamente");
            
          </script>
          
    
               <?php 
                redirect(getUrl("Hobbies","Hobbies","consult"));
            }else {
                ?>
                <script>
         alert("No se efectuo el registro");
           
         </script>
         <?php
                redirect(getUrl("Hobbies","Hobbies","consult"));
                
            }

        }
    }


?>