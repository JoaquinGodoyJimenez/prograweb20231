<?php
    //info.php es el archivo php que lee wamp de manera predeterminada.

    //Crear una variable
    $a = 0; 
    print($a);

    //Operacion con variable
    $c = $a + 20;
    print($c);

    //estructoras de control
    for ($i = 0; $i < 50 ; $i++){
        print($i);
        //print("<br>");      //Añadimos un salto de linea de HTML.
    }

    $a = random_int(1, 160000000);
    print($a);
    print("<br>");
    $a = dechex($a);
    print($a);
    $a = strtoupper($a);
    print("<br>");
    print("Hola mundo!");

    for ($i = 0; $i < 500 ; $i++){
        $a = strtoupper(dechex(random_int(1,160000000)));
        print("<p style = 'color: #$a'>Hola mundo!</h1>");
        //print("<br>");      //Añadimos un salto de linea de HTML.        
    }

    //arreglo
    $amigos = array("Ppawmot","Tilina","Potaxio","Niby","MPP");

    // . Es el concatenador
    for ($i=0; $i < 5; $i++) { 
        //print($amigos,[$i]);
        print("<br>");
    }

    $a = random_int(0, sizeof($amigos) - 1);

    //array 3d
    //dimensiones
    
    $alumnos = array();
    $alumnos["19030394"] = array(
        5 =>array(
            1 =>array(
                'Materia' => 'Taller de BD',
                'Calificacion' =>  '100'
            )
            2 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '100'
            )
            3 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '100'
            )
            4 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '100'
            )
            5 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '100'
            )
            ),
        6 =>array(
            1 =>array(
                'Materia' => 'Taller de BD',
                'Calificacion' =>  '0'
            )
            2 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '0'
            )
            3 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '0'
            )
            4 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '0'
            )
            5 => array(
                'Materia' => 'Taller de SO',
                'Calificacion' =>  '0'
            )
            );
    )
?>