<?php
namespace Model;

use Model\ConexionModel;

class GradoModel{

    public static function GuardarGrado($datos){
        try {
            $stmt = ConexionModel::conectar()->prepare('INSERT INTO grado (Nombre_Grado) VALUE (:nom_grado)');
            $stmt->bindParam(':nom_grado',$datos['Nombre_Grado']) ;

            return $stmt->execute()? true: false;
        }catch( \Throwable $th ) {
            return false;

        }

    }

    public static function ListaGrado(){

        $stmt = ConexionModel::conectar()->prepare(" SELECT * FROM grado ");
        $stmt->execute();
        return $stmt->fetchAll();

    }



}

?>