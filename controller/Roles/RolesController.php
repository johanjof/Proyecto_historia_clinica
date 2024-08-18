<?php

    include_once './model/Roles/RolesModel.php';

    class RolesController{
        public function getInsert(){

            $obj=new RolesModel();

            $sql="SELECT * FROM roles";

            $roles=$obj ->consult($sql);

            include_once './view/Roles/insert.php';

        }

        public function postInsert(){

            $obj=new RolesModel();
            
            $rol_nombre=$_POST['rol_nombre'];
            $rol_id=$obj->autoincrement("rol_id","roles");

            $sql="INSERT INTO roles VALUES ($rol_id,'$rol_nombre')";

            $ejecutar=$obj->insert($sql);

            if($ejecutar){
                ?>
                <script>
          alert("Se registro correctamente");
            
          </script>
          
    
               <?php 

               echo redirect(getUrl("Roles","Roles","Consult"));

            }else{
                ?>
                <script>
         alert("No se efectuo el registro");
           
         </script>
         <?php
                redirect(getUrl("Roles","Roles","consult"));
                

            }

        }

        public function consult(){
            $obj= new RolesModel();

            $sql="SELECT * FROM roles";
            $roles=$obj->consult($sql);

            include_once './view/Roles/consult.php';
        }

        public function getUpdate(){
            $obj=new RolesModel();

            $rol_id=$_GET['rol_id'];

            $sql="SELECT * FROM roles WHERE rol_id=$rol_id";
            $roles=$obj->consult($sql);

            include_once "./view/Roles/update.php";
        }

        public function postUpdate(){

            $obj =new RolesModel();

            $rol_id=$_POST['rol_id'];

            $rol_nombre=$_POST['rol_nombre'];

            $sql="UPDATE roles SET rol_nombre='$rol_nombre' WHERE rol_id=$rol_id";
            $ejecutar=$obj->update($sql);

            if ($ejecutar) {
                ?>
                <script>
         alert("Se editó correctamente");
           
         </script>
         <?php

            echo redirect(getUrl("Roles","Roles","consult"));

            } else {
                ?>
                <script>
         alert("No se efectuo el registro");
           
         </script>
         <?php
                redirect(getUrl("Roles","Roles","consult"));
                
            }
        }

        public function getDelete(){
            $obj=new RolesModel();

            $rol_id=$_GET['rol_id'];
            $sql="SELECT * FROM roles WHERE rol_id=$rol_id";
            $roles=$obj->consult($sql);
            include_once './view/Roles/delete.php'; 
        }

        public function postDelete(){
            $obj=new RolesModel();

            $rol_id=$_POST['rol_id'];
            $sql="DELETE FROM roles WHERE rol_id=$rol_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                
            ?>
            <script>
	  alert("Se eliminó correctamente");
	    
	  </script>
      

           <?php 
                redirect(getUrl("Roles","Roles","consult"));
            }else {
                ?>
                <script>
         alert("No se efectuo el registro");
           
         </script>
         <?php
                redirect(getUrl("Roles","Roles","consult"));
                
            }

        }
    }


?>