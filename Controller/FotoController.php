<?php

namespace Controller;

use Model\ConexionModel;
use Model\FotoModel;

class FotoController
{

    public function Ingresarfoto($idAlumno,$archivo)
    {


        foreach ($archivo["tmp_name"] as $key => $tmp_name) {

            $nombrefoto = $archivo["name"][$key];

            $ubicacion = $archivo["tmp_name"][$key];

            $nuevaubicacion = "Img/alumno" . $idAlumno . "/";


            if (!file_exists($nuevaubicacion)) {
                mkdir($nuevaubicacion, 0777)
                    or die("no logramos crear carpeta");
            }

            $dir = opendir($nuevaubicacion);

            $rutafinal = $nuevaubicacion . $nombrefoto;


            if (move_uploaded_file($ubicacion, $rutafinal)) {

                
                $Guardaruta = FotoModel::Guardarfoto($idAlumno,$rutafinal);

                header("Location: Index.php?action=asignacion&idAlumno=$idAlumno");

                exit();
        
            } else {
                echo "error, intente de nuevo ";
            }

            closedir($dir);
        }

    }
}
