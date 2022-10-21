<?php

//Incluyo los archivos necesarios
require("./model/entity/alumno.class.php");
require("./controller/AlumnoController.php");

//Instancio el controlador
$controller = new AlumnoController();

//Ejecuto el método

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    $cmd = "";
    if (isset($_GET["cmd"])) {
        $cmd = $_GET["cmd"];
    }

    if ($cmd == "eliminar") {
        # code...
        $controller->eliminar();

    }else if($cmd == "editar"){
        $controller->editar();  
        
    } else if($cmd == "registrar"){
        
        $controller->registrar();  
    }else{
        
        $controller->index();  
    }

    ?>
</body>
</html>