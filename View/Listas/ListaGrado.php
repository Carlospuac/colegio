<?php

use Controller\GradoController;

$grado = new GradoController();

$listado = $grado->MostrarGrado();

?>


<h1 class="text-center  ">Listado Grado</h1>

<div class="container ">
<table id="example" class="table table-hover" style="width:100%">
        <thead>
            <tr>

                <th scope="col">Nombre</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
     

            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($listado as $row => $item) {

                echo "
                <tr class='table-primary'>
                    <td> <a href='Index.php?action=Listagradoalumno&IdGrado={$item['idgrado']}' class='link-light' > {$item['Nombre_Grado']} </a> </td>
                    <td><a href='Index.php?action=Modificar&IdCurso={$item['idgrado']}' class='link-light' ><i class='fa-regular fa-pen-to-square'></i></a></td>
                    <td><a href='Index.php?action=Modificar&IdCurso={$item['idgrado']}' class='link-light' ><i class='fa-sharp fa-solid fa-trash-can'></i></td>
                                        
                </tr>";
            }

            ?>

        </tbody>
    </table>

    

</div>

