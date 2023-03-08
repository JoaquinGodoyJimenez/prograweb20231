<?php
$alumnos = array();

$mbd = new PDO('mysql:host=localhost;dbname=profesor', 'profesor', '123');
$alumnos=array();
$datos=$mbd->prepare("SELECT * from alumno order by n_control");
$datos->execute();
$datos = $datos->fetchAll(PDO::FETCH_ASSOC); //guarda nombres d elos alumnos


foreach($datos as $key => $dato){
    $datos2 = $mbd->prepare("SELECT * FROM alumno_materia 
                        Where n_control='".$dato["n_control"]."'
                         ORDER BY semestre");
    $datos2->execute();
    $datos2=$datos2->fetchAll(PDO::FETCH_ASSOC); 

    //metenmos la info
    $i=0;
    foreach($datos2 as $key2 => $dato2){
        $alumnos[$dato["n_control"]][$dato2["semestre"]] [$i]["nombre_materia"]
        =$dato2["nombre_materia"];
        $alumnos[$dato["n_control"]][$dato2["semestre"]] [$i]["calificacion_materia"]
        =$dato2["calificacion"];
       
        $i++;
    }
}



