<?php
include_once './model/Login/LoginModel.php';

class LoginController{
    
function validar() {    

        $obj = new LoginModel();

        $obj -> setUsuDocum($_POST['usu_docum']);
        $obj -> setUsuClave($_POST['usu_clave']);
        $obj -> setRolId($_POST['rol_id']);

        $sql="SELECT * FROM usuarios where usu_docum=".$obj ->getUsuDocum()." and usu_clave='".$obj -> getUsuClave()."' and rol_id=".$obj -> getRolId()."";
        $login = $obj -> consult($sql);

	$match = mysqli_num_rows($login);
	
	if ($match != 0) {
	  foreach ($login as $log) {
	      $obj -> setUsuNombre($log['usu_nombre']);
	  }
	  $_SESSION['Documento'] = $obj -> getUsuDocum(); 
	  $_SESSION['usu_nombre'] = $obj -> getUsuNombre();   
	  $_SESSION['rol_id'] = $obj -> getRolId();  
	  redirect('index.php'); 
	} else {
	  ?>
	  <script>
	  alert("Usuario o Contraseña Incorrectas");
	  redirect('index.php');  //
	  </script>
	<?php
	}
        
           }
    function home(){
        include_once '../view/home.php'; //
    }
    function cerrarSesion() {
        session_destroy();
        redirect("index.php");   //
    }
}
