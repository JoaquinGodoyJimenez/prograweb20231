<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabla alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
        <?php
            $alumnos = array();
            $alumnos["19030394"] = array(
                7 => array(
                    1 =>array(
                        'Materia' => 'Gestion de proyectos',
                        'Calificacion' =>  '100'
                    ),
                    2 =>array(
                        'Materia' => 'Graficacion',
                        'Calificacion' =>  '90'
                    ),
                    3 =>array(
                        'Materia' => 'Lenguajes y automatas II',
                        'Calificacion' =>  '90'
                    ),
                    4 =>array(
                        'Materia' => 'Inteligencia artificial',
                        'Calificacion' =>  '90'
                    ),
                    5 =>array(
                        'Materia' => 'Conmutacion de redes',
                        'Calificacion' =>  '90'
                    ),
                    6 =>array(
                        'Materia' => 'Taller de investigacion I',
                        'Calificacion' =>  '90'
                    ),
                ),
                8 => array(
                    1 =>array(
                        'Materia' => 'Programacion web',
                        'Calificacion' =>  '0'
                    ),
                    2 =>array(
                        'Materia' => 'Administracion de bases de datos',
                        'Calificacion' =>  '0'
                    ),
                    3 =>array(
                        'Materia' => 'Programacion movil y servicios en la nube',
                        'Calificacion' =>  '0'
                    ),
                    4 =>array(
                        'Materia' => 'Administracion de redes',
                        'Calificacion' =>  '0'
                    ),
                    5 =>array(
                        'Materia' => 'Internet de las cosas',
                        'Calificacion' =>  '0'
                    ),
                    6 =>array(
                        'Materia' => 'Ciberseguridad',
                        'Calificacion' =>  '0'
                    ),
                )
            );
        ?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </body>
</html>