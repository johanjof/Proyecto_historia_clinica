<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include_once './lib/helpers.php';
include_once './view/partials/head.php';

// Verificación del inicio de sesión
if (isset($_SESSION['Documento'])) {
    include_once './view/partials/dashboard2.php';
} else {
    include './view/Login/Login.php';
}

// Verificación de parámetros GET
if (isset($_GET['modulo'])) {
    $modulo = $_GET['modulo'];
    $controlador = $_GET['controlador'];
    $funcion = $_GET['funcion'];
    
    resolve(); // Resolviendo la URL
}

include_once './view/partials/footer.php';
?>