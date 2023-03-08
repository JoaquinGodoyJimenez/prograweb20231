<?php
//if de una linea
//enrutador
require_once("alumnos.controller.php");
$accion = (isset($_GET["accion"])) ? $_GET["accion"] : null;

include("header.php");
switch ($accion) {
    case 'crear':
        $mensaje=null;
        if (isset($_POST['guardar'])) {
           // print_r($_FILES);
        //die();
            $data = $_POST;
            $nuevos = $web->crear($data);
            $mensaje = $web->mensajes('crear', $nuevos);
            $datos = $web->leer();
            include("alumnos.view.php");
        } else {
            include("alumnos.form.php");
        }
        //print_r($_GET);
        break;
    case 'borrar':
        $n_control = (isset($_GET["n_control"])) ? $_GET["n_control"] : null;
        $borrados = $web->borrar($n_control);
        $mensaje = $web->mensajes('borrar', $borrados);
        $datos = $web->leer();
        include("alumnos.view.php");

        break;
    case 'actualizar':
        if (isset($_POST['guardar'])) {
            $data = $_POST;
            $actualizar = $web->actualizar($data['n_control_old'],$data);
            $mensaje = $web->mensajes('actualizar', $actualizar);
            $datos = $web->leer();
            include("alumnos.view.php");
        } else {
            $n_control = (isset($_GET["n_control"])) ? $_GET["n_control"] : null;
            $datos = $web->leeruno($n_control);
            include("alumnos.form.php");
        }

        break;
    case 'leer':
    default:
        $datos = $web->leer();
        include("alumnos.view.php");
        break;
}
include("footer.php");
