<?php
namespace Model;

class FotoModel
{

      public static function Guardarfoto($idAlumno,$rutafinal){

            try {
                  $stmt = ConexionModel::conectar()->prepare("UPDATE alumno SET Ruta_Foto = :ruta WHERE idAlumno = :Id"  );
                  $stmt->bindParam(':ruta',$rutafinal , \PDO::PARAM_STR);
                  $stmt->bindParam(':Id', $idAlumno, \PDO::PARAM_STR);
                  return $stmt->execute()  ? true : false;
            } catch (\Throwable $th) {
                return false;
            }
        
      }  
}

?>