<?php
require 'vendor/autoload.php'; 
require 'Controller/GradoController.php';

require 'Model/GradoModel.php';
require 'Model/ConexionModel.php';

use Controller\gradoController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

// Crear instancia, clase controller
$gradoController = new GradoController();
$spreadsheet = new Spreadsheet();

$listado = $gradoController->MostrarGrado();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setTitle("Alumnos");

// Agregar encabezados
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'GRADO');


$row = 2;
foreach ($listado as $item) {
    $sheet->setCellValue("A{$row}", $item['idCurso']);
    $sheet->setCellValue("B{$row}", $item['Nombre_Curso']);

    $row++;
}

ob_end_clean();
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="myfile.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
?>