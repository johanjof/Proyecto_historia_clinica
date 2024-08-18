<?php

function redirect($url){
    echo "<script type='text/javascript'>"
        ."window.location.href='$url'"
        ."</script>";
}

function dd($var){
    echo "<pre>";
    die(print_r($var));
}

function getUrl($modulo, $controlador, $funcion, $parametros=false, $pagina=false){
    if ($pagina == false) {
        $pagina = "index";
    }
    $url = "$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";

    if ($parametros != false) {
        foreach ($parametros as $key => $value){
            $url .= "&$key=$value";
        }
    }

    return $url;
}

function resolve(){
    $modulo = ucwords($_GET['modulo']);
    $controlador = ucwords($_GET['controlador']);
    $funcion = $_GET['funcion'];

    // Verificación de ruta completa al módulo
    $rutaModulo = realpath(__DIR__ . "/../controller/$modulo");

    if (is_dir($rutaModulo)) {
        $rutaControlador = $rutaModulo . "/" . $controlador . "Controller.php";

        // Verificación de existencia del archivo del controlador
        if (is_file($rutaControlador)) {
            include_once $rutaControlador;

            $nombreClase = $controlador . "Controller";
            $objeto = new $nombreClase();

            // Verificación de la existencia de la función en el controlador
            if (method_exists($objeto, $funcion)) {
                $objeto->$funcion();
            } else {
                echo "La función '$funcion' no existe en el controlador '$nombreClase'.";
            }
        } else {
            echo "El archivo del controlador no existe: $rutaControlador";
        }
    } else {
        echo "El módulo '$modulo' no existe en la ruta: $rutaModulo";
    }
}
?>
