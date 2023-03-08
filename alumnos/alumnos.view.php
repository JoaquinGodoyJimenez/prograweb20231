<h1>Listado de Alumnos</h1>
<a class="btn btn-success" href="alumnos.php?accion=crear" role="button">Nuevo alumno</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">Numero de control:</th>
            <th scope="col">Apodo</th>
            <th scope="col">Opciones</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach ($datos as $key => $alumno) :
            if (!file_exists($alumno['fotografia'])) :
                $alumno['fotografia'] = "imagenes/invitado.jpg";
            endif;
        ?>
            <tr>
                <td><img src="<?php echo $alumno['fotografia']; ?>" height="64px" width="64px" class="rounded-circle" alt="Cinque Terre"></td>
                <td><?php echo $alumno['n_control']; ?></td>
                <td><?php echo $alumno['apodo']; ?></td>
                <td><a class="btn btn-primary" href="alumnos.php?accion=actualizar&n_control=<?php echo $alumno['n_control']; ?>" role="button">Editar</a>
                    <a class="btn btn-danger" href="alumnos.php?accion=borrar&n_control=<?php echo $alumno['n_control']; ?>" role="button">Borrar</a>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>