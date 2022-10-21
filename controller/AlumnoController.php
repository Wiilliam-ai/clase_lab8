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
        $nombre = $_POST["nombres"];
        echo $nombre;
        require("view/registrar.php");
    }

    public function editar(){
        require("view/editar.php");
    }

    public function eliminar(){
        require("view/eliminar.php");
    }

}