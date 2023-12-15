<?php

use Controller\CursoController;

$Curso = new CursoController();
$listado = $Curso->MostrarCurso();

ob_start();
?>

<h1 class="text-center">Listado Curso</h1>


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
                    
                    <td> {$item['Nombre_Curso']}</a></td>
                    <td><a href='Index.php?action=Modificar&IdCurso={$item['idCurso']}' class='link-light' ><i class='fa-regular fa-pen-to-square'></i></a></td>
                    <td><a href='Index.php?action=Modificar&IdCurso={$item['idCurso']}' class='link-light' ><i class='fa-sharp fa-solid fa-trash-can'></i></td>
                    
                </tr>";
            }

            ?>
        </tbody>

    </table>

    <?php

    $html = ob_get_clean();
    echo $html;
    ?>

    <a href="Index.php?action=descargarExcel" type="button " class="btn btn-primary btn-lg"> descargar Excel </a>
   
    <!-- <a href="index.php?action=descargarpdf&html=<?php echo urlencode($html); ?>" type="button" class="btn btn-primary btn-lg"> descargar PDF </a> -->

</div>