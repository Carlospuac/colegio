<?php

namespace Controller;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

use Model\CursoModel;

class ExcelController
{
    public function DescargarExcel()
    {

        $excel = new Spreadsheet();
        $datos = new CursoModel();

        $listado = $datos->ListaCurso();
        $hoja1 = $excel->getActiveSheet();

        $hoja1->setTitle("Alumnos");

        $hoja1->setCellValue("A1", "ID");
        $hoja1->setCellValue("B1", "Nombre Curso");

        $FILA = 2;

        foreach ($listado as $row => $item) {
            $hoja1->setCellValue("A{$FILA}", $item['idCurso']);
            $hoja1->setCellValue("B{$FILA}", $item['Nombre_Curso']);

            $FILA++;
        }

        ob_end_clean();
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="myfile.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = IOFactory::createWriter($excel, 'Xlsx');
        $writer->save('php://output');

        exit;
    }


}
