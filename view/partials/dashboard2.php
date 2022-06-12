<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="./css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="./css/style.css"> <!-- Resource style -->
	<script src="./js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Dashboard</title>
</head>
<body>
<main id="cd-main-content">
	<section id="cd-intro">
		<h1>Hola bienvenido a Optilax</h1>

		<header class="cd-header">
			<div id="cd-logo"><a href="#0"><img src="https://codyhouse.co/demo/full-page-intro-and-navigation/img/cd-logo.svg" alt="Logo"></a></div>
			<a class="cd-menu-trigger" href="#main-nav">Menu<span></span></a>
		</header>
		<div class="cd-blurred-bg"></div>
	</section> <!-- cd-intro -->
</main>

<div class="cd-shadow-layer"></div>

<nav id="main-nav">
	
 <ul>
	 
 <li><a href="#" class="collapsible"><span>Pacientes</span></a>
	<div class="content">
		<a href="#" class="close-menu"><p>Registrar Pacientes</p></a>
		<a href="#" class="close-menu"><p>Consultar Pacientes</p></a>
	  </div>

	  <a href="#" class="collapsible"><span>Estratos</span></a>
	  <div class="content">
		  <a href="<?php echo getUrl("Estrato","Estrato","getInsert"); ?>" class="close-menu"><p>Registrar Estratos</p></a>
		  <a href="<?php echo getUrl("Estrato","Estrato","consult"); ?>" class="close-menu"><p>Consultar Estratos</p></a>
		</div>

		<a href="#" class="collapsible"><span>Generos</span></a>
	  <div class="content">
		  <a href="#"><p>Registrar Generos</p></a>
		  <a href="#"><p>Consultar Generos</p></a>
		</div>

        <a href="#" class="collapsible"><span>Usuarios</span></a>
	  <div class="content">
		  <a href="#"><p>Registrar Usuarios</p></a>
		  <a href="#"><p>Consultar Usuarios</p></a>
		</div>

        
			
</li>
	
	<a href="#0" class="cd-close-menu">Close<span></span></a>

</ul>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="./js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script><script  src="./js/Dashboard2.js"></script>

</body>
</html>
