<?php

use Controller\AlumnoController;

$alumno = new AlumnoController();

$listado = $alumno->MostrarAlumno();

?>


<h1 class="text-center  ">Listado Alumnos</h1>

<div class="container ">
    <table id="example" class="table table-hover" style="width:100%">
        <thead>
            <tr>

                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Nacimiento</th>
                <th scope="col">Numeto tel.</th>
                <th scope="col">Correo</th>
                <th scope="col">Inscripcion</th>
                <th scope="col">Editar</th>
                <th scope="col">Elininar</th>

            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($listado as $row => $item) {

                echo "
            <tr class='table-primary'>

                <td><a href='Index.php?action=asignacion&idAlumno={$item['idAlumno']}' class='link-underline-opacity-0 link-light' >{$item['Nombre']}</td>
                <td>{$item['Direccion_Casa']}</td>
                <td>{$item['Fecha_Nacimento']}</td>
                <td>{$item['Numero_Telefonico']}</td>
                <td>{$item['Correo_Electronico']}</td>
                <td>{$item['Fecha_Inscripcion']}</td>
                <td><a href='Index.php?action=ModificarAlumno&idAlumno={$item['idAlumno']}' class='link-light' ><i class='fa-regular fa-pen-to-square'></i></i></td>
                <td><a href='Index.php?action=EliminarAlumno&idAlumno={$item['idAlumno']}' class='link-light' ><i class='fa-sharp fa-solid fa-trash-can'></i></td>
        

            </tr>";
            }

            ?>

        </tbody>
    </table>

    <a href="Index.php?action=descargarpdf" type="button " class="btn btn-primary btn-lg"> descargar PDF </a>

</div>