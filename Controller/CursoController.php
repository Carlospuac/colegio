<?php

namespace Controller;

use Model\CursoModel;

class CursoController
{

    public function AgregarCurso()
    {

        if (!empty($_POST['Nombre_Curso'])) {
            $Nombre_Curso = strClean($_POST['Nombre_Curso']);

            $datos = array(
                'Nombre_Curso' => $Nombre_Curso,
            );

            $respuesta = CursoModel::GuardarCurso($datos);

            return $respuesta;
        }
    }

    public function MostrarCurso()
    {

        $respuesta = CursoModel::ListaCurso();

        return $respuesta;
    }


}
