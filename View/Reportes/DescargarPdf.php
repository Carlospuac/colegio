<?php
use Controller\PdfController;

$descargar = new PdfController();

$html = urldecode($_GET['html']);

$pdf = $descargar->descargarpdf($html);







?>