<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard </title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/172203/font-awesome.min.css'><link rel="stylesheet" href="./css/dashboard.css">

</head>
<body>
<!-- partial:index.partial.html -->
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
   <nav class="navbar navbar-default no-margin">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header fixed-brand">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
            <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
</button>
         <!-- <a class="navbar-brand" href="#"> <i class="fa fa-rocket fa-4"></i> </a> -->
      </div>
      <!-- navbar-header-->
      <a href="<?php echo getUrl("Login","Login","cerrarSesion"); ?>">Salir</a>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li class="active">
               <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"> <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
               </button>
               <p class="navbar-brand" href="#"></i><?php echo "Usuario: ".$_SESSION['usu_nombre']."<br>"." Rol:".$_SESSION['rol_id'];?> </p> 
               
            </li>
         </ul>
      </div>
      <!-- bs-example-navbar-collapse-1 -->
   </nav>
   <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
         <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <li class="active">
               <a href="#"><span class="fa-stack fa-lg pull-left"> <!-- <i class="fa fa-address-book" aria hidden="true"></i> --></span>Paciente</a>
               <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                  <li><a href="#">Registrar</a></li>
                  <li><a href="#">Consultar</a></li>
               </ul>
            </li>
            <li>
               <a href="#"><span class="fa-stack fa-lg pull-left"><!-- <i class="fa fa-flag fa-stack-1x "></i> --></span>Estratos</a>
               <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                  <li><a href="<?php echo getUrl("Estrato","Estrato","getInsert"); ?>"><span class="fa-stack fa-lg pull-left"><!-- <i class="fa fa-flag fa-stack-1x "></i> --></span>Registrar</a></li>
                  <li><a href="<?php echo getUrl("Estrato","Estrato","consult"); ?>"><span class="fa-stack fa-lg pull-left"><!-- <i class="fa fa-flag fa-stack-1x "></i> --></span>Consultar</a></li>
               </ul>
            </li>

            <li>
               <a href="#"><span class="fa-stack fa-lg pull-left"><!-- <i class="fa fa-flag fa-stack-1x "></i> --></span>Hobbies</a>
               <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                  <li><a href="<?php echo getUrl("Hobbies","Hobbies","getInsert"); ?>"><span class="fa-stack fa-lg pull-left"><!-- <i class="fa fa-flag fa-stack-1x "></i> --></span>Registrar</a></li>
                  <li><a href="<?php echo getUrl("Hobbies","Hobbies","consult"); ?>"><span class="fa-stack fa-lg pull-left"><!-- <i class="fa fa-flag fa-stack-1x "></i> --></span>Consultar</a></li>
               </ul>
            </li>
           <!--  <li>
               <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-cloud-download fa-stack-1x "></i></span>Overview</a>
            </li>
            <li>
               <a href="#"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-cart-plus fa-stack-1x "></i></span>Events</a>
            </li>
            <li>
               <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-youtube-play fa-stack-1x "></i></span>About</a>
            </li>
            <li>
               <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-wrench fa-stack-1x "></i></span>Services</a>
            </li>
            <li>
               <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span>Contact</a>
            </li>
         </ul> -->
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
         <div class="container-fluid xyz">
            <div class="row">
               <div class="col-lg-12">
                  <h1></a></h1>
                  <p> </p>
               </div>
            </div>
         </div>
      </div>
      <!-- /#page-content-wrapper -->
   </div>
   <!-- /#wrapper -->
   <!-- jQuery -->

</body>

</html>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="./js/dashboard.js"></script>

</body>
</html>

