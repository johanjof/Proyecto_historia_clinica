<?php
session_start();
include_once '../lib/helpers.php';
include_once '../view/partials/head.php';


if (isset($_SESSION['Documento'])) {
  include_once '../view/partials/dashboard2.php';
  } else {
  include '../view/login/Login.php';
  }
if (isset($_GET['modulo'])) {
  $modulo = $_GET['modulo'];
  $controlador = $_GET['controlador'];
  $funcion = $_GET['funcion'];
  getUrl($modulo, $controlador, $funcion);
  resolve();
}

include_once '../view/partials/footer.php';

?>
