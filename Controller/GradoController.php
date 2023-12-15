<?php
namespace Controller;

use Model\GradoModel;

class GradoController{

    public function AgregarGrado(){

        if(!empty($_POST['Nombre_Grado']) ){
            $Nombre_Grado = strClean($_POST['Nombre_Grado']);

            $datos = array(
                'Nombre_Grado'=>$Nombre_Grado,
            );

            $respuesta = GradoModel::GuardarGrado($datos);

            return $respuesta;

        }

    }

    public function MostrarGrado(){

        $respuesta = GradoModel::ListaGrado();

        return $respuesta;

    }


}



?>