<?php

require "Conexion.php";

class AlumnoDao{

    public $base;

    public function __construct(){
        $this->base = Conexion::conectar();
    }

    public function select($id = 0){
        if ($id>0){
            $sql="select * from alumno where id=?";
            $tabla=$this->base->prepare($sql);
            $tabla->bindParam(1,$id);
            $tabla->execute();
            $resultado=$tabla->fetch(PDO::FETCH_OBJ);
        }else{
            $sql="select * from Alumno order by 2, 3";
            $tabla=$this->base->query($sql);
            $tabla->execute();
            $resultado=$tabla->fetchAll(PDO::FETCH_OBJ);
        }
        return $resultado;
    }

    public function insert($alumno){
        $sql = "INSERT INTO alumno(apellidos,nombres,edad) VALUES(?,?,?)";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1,$alumno->getApellido());
        $tabla->bindValue(2,$alumno->getNombre());
        $tabla->bindValue(3,$alumno->getEdad());
        $tabla->execute();
    }

    public function update($alumno){
        $sql = "UPDATE alumno SET apellidos = ? ,nombres = ?,edad = ? WHERE id = ?";
        $tabla = $this->base->prepare($sql);
        $tabla->bindValue(1,$alumno->getApellido());
        $tabla->bindValue(2,$alumno->getNombre());
        $tabla->bindValue(3,$alumno->getEdad());
        $tabla->bindValue(4,$alumno->getId());
        $tabla->execute();
    }

    public function delete($id = 0){
        $sql ="DELETE FROM alumno WHERE id=?";
        $tabla = $this->base->prepare($sql);
        $tabla->bindParam(1,$id);
        $tabla->execute();
    }

}