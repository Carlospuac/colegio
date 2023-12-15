<?php

$idAlumno = isset($_GET['idAlumno']) ? $_GET['idAlumno'] : null;

$archivo = isset($_FILES['archivo']) ? $_FILES['archivo'] : null;

use Controller\FotoController;


$foto =new FotoController();


$Guardar = $foto->Ingresarfoto($idAlumno,$archivo);




?>