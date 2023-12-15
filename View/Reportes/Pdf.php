<?php

use Controller\AlumnoController;
use Dompdf\Dompdf;
use Dompdf\Options;

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Alumnos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega un archivo de estilos externo -->
</head>
<body>
    <div class="titulo center">LISTADO ALUMNOS</div>
    <table class="table mt-3" id="tabla">
        <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha_Nacimento</th>
                <th>Fecha_Inscripcion</th>
                <th> Correo_Electronico</th>
                <th>Grado</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $alumnosController = new AlumnoController();
            $listado = $alumnosController->MostrarAlumno();

            foreach ($listado as $item) : ?>
                <tr>
                    <td><?= $item['idAlumno']; ?></td>
                    <td><?= $item['Nombre']; ?></td>
                    <td><?= $item['Fecha_Nacimento']; ?></td>
                    <td><?= $item['Fecha_Inscripcion']; ?></td>
                    <td><?= $item['Correo_Electronico']; ?></td>
                    <td><?= $item['Grado']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php

$html = ob_get_clean(); // En $html está almacenado todo el HTML para pasarlo a PDF

// Configuración de opciones
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);

// Crear instancia de Dompdf
$dompdf = new Dompdf($options);

// Agregar esta línea para habilitar PHP en Chrome
$dompdf->set_option('isPhpEnabled', true);

$dompdf->loadHtml($html);
$dompdf->setPaper('letter', 'portrait');

// Renderizar PDF
$dompdf->render();

// Descargar o mostrar en línea el PDF
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=documento.pdf");

//para limpiar las salidas
ob_clean();

//para ver en el navegador
//echo $dompdf->output(); 

//para descargar el archivo
$dompdf->stream("alumno.pdf", array("Attachment" => true));

?>
