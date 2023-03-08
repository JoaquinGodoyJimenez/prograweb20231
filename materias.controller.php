<?php
    $mbd = new PDO('mysql:host=localhost;dbname=profesor', 'profesor', '123');

    $alumnos = array();
    $datos = $mbd -> prepare("SELECT * FROM ALUMNO ORDER BY N_CONTROL");
    $datos -> execute();

    $datos = $datos -> fetchAll(PDO::FETCH_ASSOC);

    foreach ($datos as $key => $dato) {
        //array_push($alumnos, $dato["n_control"]);
        //$alumnos[$dato["n_control"]] = $dato;
        $datos2 = $mbd -> prepare("SELECT * FROM ALUMNO_MATERIA AS AM
                                   WHERE N_CONTROL = '". $dato["n_control"] .
                                 "' ORDER BY SEMESTRE");                               

        $datos2 -> execute();
        $datos2 = $datos2 -> fetchAll(PDO::FETCH_ASSOC);

        $i = 0;

        foreach ($datos2 as $key2 => $dato2) {
            $alumnos[$dato["n_control"]][$dato2["semestre"]][$i]["nombre_materia"] = $dato2["nombre_materia"];
            $alumnos[$dato["n_control"]][$dato2["semestre"]][$i]["Calificacion_materia"] = $dato2["Calificacion_materia"];
            $i++;
        }
    }

    //print_r($alumnos);

?>