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
    <?php foreach($alumnos as $key => $alumno): ?><!-- Para tablas, j¿key tiene el valor del arreglo -->
        <h1>Numero de control:<?php print($key);?></h1>

        <?php foreach($alumno as $key => $semestre):?><!-- Para cada alumno, j¿key tiene el valor del arreglo -->
        <h2>Semestre: <?php print($key);?>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">Materia</th>
                <th scope="col">Calificación</th>
            </tr>
        </thead>
        <tbody>
                <?php $promedio=0; foreach($semestre as $key => $materia):$promedio += $materia["calificacion_materia"];?>
            <tr>
                <td><?php print($materia["nombre_materia"])?></td>
                <td><?php print($materia["calificacion_materia"])?></td>
            </tr>
            <?php endforeach;$promedio=round($promedio / sizeof($semestre));?>
            <tr>
                <th scope="col">Promedio</th>
                <th scope="col"><?php print($promedio);?></th>
            </tr>
        </tbody>
    </table>
    <?php endforeach;?> 
    <?php endforeach;?> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>