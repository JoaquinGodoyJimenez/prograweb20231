<?php
require_once('sistema.class.php');
class Alumnos extends Sistema
{
    function crear($data)
    {
        $datos = 0;
        $n_control = $data['n_control'];
        $apodo = $data['apodo'];
        $SQL = "insert into alumno(n_control,apodo) values(:n_control,:apodo)";
        $this->conexion();
        $sentencia = $this->_conexion->prepare($SQL);
        $sentencia->bindParam(":n_control", $n_control);
        $sentencia->bindParam(":apodo", $apodo);
        $sentencia->execute();
        $datos = $sentencia->rowCount();
        return $datos;
    }
    function actualizar($n_control_old, $data)
    {
        $datos = 0;
        if (!is_null($n_control_old)) {
            $SQL = "update alumno set apodo=:apodo,n_control=:n_control where n_control=:n_control_old";
            $this->conexion();
            $sentencia = $this->_conexion->prepare($SQL);
            $sentencia->bindParam(":n_control", $data['n_control']);
            $sentencia->bindParam(":apodo", $data['apodo']);
            $sentencia->bindParam(":n_control_old", $data['n_control_old']);
            $sentencia->execute();
            $datos = $sentencia->rowCount();
        }
        return $datos;
    }
    function borrar($n_control)
    {

        $datos = 0;
        if (!is_null($n_control)) {
            $this->conexion();
            $SQL = "delete from alumno where n_control=:n_control";
            $sentencia = $this->_conexion->prepare($SQL);

            $sentencia->bindParam(":n_control", $n_control);
            $sentencia->execute();
            $datos = $sentencia->rowCount();
        }
        return $datos;
    }
    function leer()
    {
        $this->conexion();
        $SQL = "select * from alumno order by n_control asc";
        $datos = $this->_conexion->prepare($SQL);
        $datos->execute();

        $datos = $datos->fetchAll(PDO::FETCH_ASSOC);
        return $datos;
    }
    function leeruno($n_control)
    {
        $datos = null;
        if (!is_null($n_control)) {
            $this->conexion();
            $SQL = "select * from alumno where n_control=:n_control";
            $datos = $this->_conexion->prepare($SQL);
            $datos->bindParam(":n_control", $n_control);
            $datos->execute();
            $datos = $datos->fetchAll(PDO::FETCH_ASSOC);
            $datos = $datos[0];
        }
        return $datos;
    }
}
$web = new Alumnos;
