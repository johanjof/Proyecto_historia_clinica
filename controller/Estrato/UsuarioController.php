<?php
     
     include_once './model/Usuario/UsuarioModel.php';

     class UsuarioController{
            public function getInsert(){
     
             $obj= new UsuarioModel;
     
             $sql="SELECT * FROM roles";
             $usuarios = $obj->consult($sql);
     
             include_once './view/Usuario/insert'; 
         }

         public function postInsert(){
            $obj= new UsuarioModel();
    
            $usudoc= $_POST['usu_docum'];
            $rol_id=$_POST['rol_id'];
            $usu_clave=$_POST['usu_clave'];
            $usu_nombre=$_POST['usu_nombre'];
            $usu_id=$obj->autoincrement("usu_id","usuarios");
    
            $sql="INSERT INTO usuarios VALUES ($usu_id,'$usudoc',$usu_clave,$rol_id,$usu_nombre)";
            $ejecutar= $obj->insert($sql);
            
            if ($ejecutar) {
                redirect(getURl("Usuario","Usuario","getInsert"));
            }else{
                echo "raios, hubo un error";
            }
    
        }





        }
?>