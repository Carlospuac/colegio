<?php
namespace Model;

use Model\ConexionModel;

class CursoModel{

    public static function GuardarCurso($datos){
        try {
            $stmt = ConexionModel::conectar()->prepare('INSERT INTO curso (Nombre_Curso) VALUE (:nom_curso)');
            $stmt->bindParam(':nom_curso',$datos['Nombre_Curso']) ;

            return $stmt->execute()? true: false;
        }catch( \Throwable $th ) {
            return false;

        }

    }

    public static function ListaCurso(){

        $stmt = ConexionModel::conectar()->prepare(" SELECT * FROM curso ");
        $stmt->execute();
        return $stmt->fetchAll();

    }

}

?>