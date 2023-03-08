<?php
class Sistema
{
    var $_conexion = null;
    function conexion()
    {
        $this->_conexion = new PDO('mysql:host=localhost;dbname=profesor', 'profesor', '123');
    }

    function mensajes($tipo, $valor)
    {
        $mensaje = ' ';
        $color = 'success';
        switch ($tipo) {
            case 'borrar':
                if ($valor == 1) {
                    $mensaje = 'Datos Borrados con exito';
                } else {
                    $mensaje = 'Ocurrio un error';
                    $color = 'danger';
                }
                break;

            case 'crear':
                if ($valor == 1) {
                    $mensaje = 'Alumno creado con exito';
                } else {
                    $mensaje = 'Ocurrio un error';
                    $color = 'danger';
                }
                break;
            case 'actualizar':
                if ($valor == 1) {
                    $mensaje = 'Alumno modificado con exito';
                } else {
                    $mensaje = 'Ocurrio un error';
                    $color = 'danger';
                }
                break;
        }
        include("mensaje.view.php");
    }
}
