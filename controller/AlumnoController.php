<?php

require "model/dao/AlumnoDao.php";

class AlumnoController{

    var $alumnos;

    public function __construct(){
        /*
        $alumno = new Alumno();
        $alumno->setId(1);
        $alumno->setNombre("William");
        $alumno->setApellido("Castro");
        $alumno->setEdad(21);

        $alumno1 = new Alumno();
        $alumno1->setId(2);
        $alumno1->setNombre("Julian");
        $alumno1->setApellido("Mendes");
        $alumno1->setEdad(19);

        $this->alumnos = [
            1 => $alumno,
            2 => $alumno1,
            3 => $alumno,
            4 => $alumno,
        ];*/

    }



    public function index(){
        $alumnoDao = new AlumnoDao();
        $rowi = $alumnoDao->select();

        //Asigno los alumno a una variable que estará esperando la vista
        $rowset = $rowi;


        //Le paso los datos a la vista
        require("view/index.php");

    }

    public function registrar(){
        $alumnoDao = new AlumnoDao();
        $alumno = new Alumno();
        if ($_POST) {
            # code...
            $apellidos = $_POST["apellidos"];
            $nombre = $_POST["nombres"];
            $edad = $_POST["edad"];

            $alumno->setApellido($apellidos);
            $alumno->setNombre($nombre);
            $alumno->setEdad($edad);

            $alumnoDao->insert($alumno);
        }
        
        
        require("view/registrar.php");
    }

    public function editar(){
        $alumnoDao = new AlumnoDao();
        $alumno = new Alumno();
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }

        $objeto = $alumnoDao->select($id);

        if ($_POST) {

            $idC = $_POST["txtId"];
            $apellidos = $_POST["apellidos"];
            $nombre = $_POST["nombres"];
            $edad = $_POST["edad"];

            $alumno->setId($idC);
            $alumno->setApellido($apellidos);
            $alumno->setNombre($nombre);
            $alumno->setEdad($edad);

            $alumnoDao->update($alumno);
            header("location: index.php");
        }

        require("view/editar.php");
    }

    public function eliminar(){
        $alumnoDao = new AlumnoDao();
        $id = "";
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
        }
        $alumnoDao->delete($id);
        header("location: index.php");
    }

}