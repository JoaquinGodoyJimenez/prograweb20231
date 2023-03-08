<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                'Calificacion' =>  '0'
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

        echo "<pre>";
        print_r($alumnos);

    //Tabla por semestre materias llevadas calificacion
    //abajo de cada semestre promedio
    //hasta abajo promedio general

    foreach ($alumnos as $key => $alumno) {
        print ("<H1>".$key."</H1>");


        foreach ($alumno as $key => $semestre) {
            print ("<H1>".$key."</H1>");

            ?>
            <table class="table">
          <thead>
            <tr>
              <th scope="col">Materia</th>
              <th scope="col">Calificacion</th>
            </tr>
          </thead>
            <?php>

            $suma = 0;
            $elementos = 0;
            foreach ($semestre as $materia) {
                ?>
                <tr>
                    <td>
                        <?php
                            print($materia["Materia"] . $materia["Calificacion"])
                        ?>
                    </td>
                    <td>otto</td>
                </tr>
                <?php
                
                
                print("<br>")
                $suma += $materia["Calificacion"];      
                $elementos ++;          
            }
            $promedio = round ($suma / $elementos, 2);
            print($promedio);
        }
    ?>
    <tr>
              <th scope="col">Promedio</th>
              <th scope="col"><?php> print($promedio) ?> </th>
            </tr>
</table>
    <?php>
    }

    //Print_r y foreach
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>