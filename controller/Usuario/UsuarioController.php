<?php
     include_once '../model/Usuario/UsuarioModel.php';

     class UsuarioController{
         public function getInsert(){
     
             $obj= new UsuarioModel;
     
             $sql="SELECT * FROM roles";
             $roles = $obj->consult($sql);
             include_once '../view/Usuario/insert.php';
         }
     
         public function postInsert(){
             $obj= new UsuarioModel();
    
             $usu_docum= $_POST['usu_docum'];
             $rol_id=$_POST['rol_id'];
             $usu_nombre=$_POST['usu_nombre'];
             $usu_clave=$_POST['usu_clave'];
             $usu_id=$obj->autoincrement("usu_id","usuarios");
     
             $sql="INSERT INTO usuarios VALUES($usu_id,'$usu_docum','$usu_clave',$rol_id,'$usu_nombre')";
             $ejecutar= $obj->insert($sql);
            
             if ($ejecutar) {
                 redirect(getURl("Usuario","Usuario","getInsert"));
             }else{
                 echo "Repanpanoss, hubo un error";
             } 
     
         }
     
         public function consult(){
             $obj= new UsuarioModel();
     
             $sql="SELECT u.usu_id, u.usu_docum, u.usu_clave, u.usu_nombre,  r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id";
             $usuarios= $obj->consult($sql);
     
     
             include_once '../view/Usuario/consult.php';
     
         } 
     
         public function getUpdate(){
             $obj=new UsuarioModel();
             
             $usu_id=$_GET['usu_id'];
             $sql="SELECT * FROM usuarios WHERE usu_id=$usu_id";
             $usuario=$obj->consult($sql);
             $sql2="SELECT *FROM roles";
             $roles=$obj->consult($sql2);
             include_once '../view/Usuario/update.php';
         }
         public function postUpdate(){
             $obj=new UsuarioModel();
     
             $usu_id=$_POST['usu_id'];
             $usu_docum=$_POST['usu_docum'];
             $rol_id=$_POST['rol_id'];
             $usu_nombre=$_POST['usu_nombre'];
             $usu_clave=$_POST['usu_clave'];

     
             $sql="UPDATE usuarios SET usu_docum='$usu_docum', rol_id=$rol_id, usu_clave='$usu_clave',usu_nombre='$usu_nombre' WHERE usu_id=$usu_id";
     
             $ejecutar=$obj->update($sql);
             if ($ejecutar) {
                 redirect(getUrl("Usuario","Usuario","consult"));
             }else {
                 echo "Hubo un error en la ejecucion";
             }
         }  
     

         public function getDelete(){
            $obj=new UsuarioModel();

            $usu_id=$_GET['usu_id'];
            $sql="SELECT * FROM usuarios WHERE usu_id=$usu_id";
            $sql="SELECT u.*, r.rol_nombre FROM usuarios AS u, roles AS r WHERE u.rol_id=r.rol_id
            AND usu_id=$usu_id";
            $usuario=$obj->consult($sql);
            include_once '../view/Usuario/delete.php';
        }
        public function postDelete(){
            $obj=new UsuarioModel();

            $usu_id=$_POST['usu_id'];
            $usu_docum=$_POST['usu_docum'];
            $sql="DELETE FROM usuarios WHERE usu_id=$usu_id";

            $ejecutar=$obj->delete($sql);
            if ($ejecutar) {
                redirect(getUrl("Usuario","Usuario","consult"));
            }else {
                echo "Hubo un error en la ejecucion";
            }
        }

        /* function consult(){
            $obj=new UsuarioModel();
            $sql="SELECT * FROM roles";
            $roles=$obj->consult($sql);
            if (isset($_POST['usu_nombre'])) {
                if ($_POST['rol_id']!=NULL) {
                    $sql="SELECT u.usu_id,u.usu_docum,u.usu_clave,u.usu_nombre,r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id and r.rol_id=".$_POST['rol_id'];
                    if ($_POST['usu_nombre']!=NULL) {
                        $sql.=" and u.usu_nombre like '%".$_POST['usu_nombre']."%'";
                        if ($_POST['usu_docum']!=NULL) {
                            $sql.=" and usu_docum like '%".$_POST['usu_docum']."%'";
                        }
                    } else if ($_POST['usu_docum']!=NULL) {
                            $sql.=" and usu_docum=".$_POST['usu_docum'];
		    }
                } elseif ($_POST['usu_nombre']!=NULL) {
                        $sql = "SELECT u.usu_id,u.usu_docum,u.usu_clave,u.usu_nombre,r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id and u.usu_nombre like '%".$_POST['usu_nombre']."%'";
			if ($_POST['usu_docum']!=NULL) {
                            $sql.=" and usu_docum=".$_POST['usu_docum'];
			}
		} elseif ($_POST['usu_docum']!=NULL) {
                            $sql="SELECT u.usu_id,u.usu_docum,u.usu_clave,u.usu_nombre,r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id and  u.usu_docum like '%".$_POST['usu_docum']."%'";
                        
	    } else {
                $sql="SELECT u.usu_id,u.usu_docum,u.usu_clave,u.usu_nombre,r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id";
                     
                }
            
            } else {
                /* $sql="SELECT * FROM usuarios"; 

                $sql="SELECT u.usu_id,u.usu_docum,u.usu_clave,u.usu_nombre,r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id";
            }

            $usuarios=$obj->consult($sql);
            include_once '../view/usuario/consult.php'; 
        } */

        public function filtro(){
            $obj = new UsuarioModel();

            $buscar=$_POST['buscar'];

            $sql="SELECT u.usu_id, u.usu_docum, u.usu_clave, u.usu_nombre, r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id AND (u.usu_nombre LIKE '%$buscar%' /* OR u.usu_docum  LIKE '%$buscar% ' */)";
            $usuarios=$obj->consult($sql);

            include_once '../view/Usuario/filtro.php';
        }

        
        public function filtro2(){
            $obj = new UsuarioModel();

            $buscar=$_POST['buscar'];

            $sql="SELECT u.usu_id, u.usu_docum, u.usu_clave, u.usu_nombre, r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id AND (u.usu_docum LIKE '$buscar%' /* OR u.usu_docum  LIKE '%$buscar% ' */)";
            $usuarios=$obj->consult($sql);

            include_once '../view/Usuario/filtro.php';
        }      
        
        public function filtro3(){
            $obj = new UsuarioModel();

            $buscar=$_POST['buscar'];

            $sql="SELECT u.usu_id, u.usu_docum, u.usu_clave, u.usu_nombre, r.rol_nombre FROM usuarios as u, roles as r WHERE u.rol_id=r.rol_id AND (r.rol_nombre LIKE '$buscar%' /* OR u.usu_docum  LIKE '%$buscar% ' */)";
            $usuarios=$obj->consult($sql);

            include_once '../view/Usuario/filtro.php';
        }
 

    }
   
?>