<?php


use Controller\AlumnoController;

$datos = new AlumnoController;

$listado = $datos->MostrarAlumnoGrado();


?>

<h1 class="text-center  ">Listado Grado</h1>

<div class="container ">
    <table id="example" class="table table-hover" style="width:100%">
        <thead>
            <tr>

                <th scope="col">idAlumno</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Fecha inscripcion</th>
                <th scope="col">Correo Electronico</th>
                <th scope="col">Grado</th>


            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($listado as $row => $item) {

                echo "
                <tr class='table-primary'>
                    <td> {$item['idAlumno']}  </td>
                    <td><a href='Index.php?action=asignacion&idAlumno={$item['idAlumno']}' class='link-underline-opacity-0 link-light' >{$item['Nombre']}</td>
                    <td> {$item['Fecha_Nacimento']} </td>
                    <td> {$item['Fecha_Inscripcion']} </td>
                    <td> {$item['Correo_Electronico']} </td>
                    <td> {$item['Grado']}</td>                         
                </tr>";
            }

            ?>

        </tbody>
    </table>



</div>