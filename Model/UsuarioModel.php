<?php

namespace Model;

use Model\ConexionModel;

class UsuarioModel
 {
    public static function GuardarUsuario( $datos )
 {
        try {
            $stmt = ConexionModel::conectar()->prepare( "INSERT INTO usuario
            (Primer_Nombre,segundo_Nombre, primer_Apellido,segundo_Apellido,Correo_Electronico,Usuario,Password,Id_Rol_Usuario) VALUES 
            (:Primer_Nombre,:segundo_Nombre,:primer_Apellido,:segundo_Apellido,:Correo_Electronico,:Usuario,:Password,1);" );

            $stmt->bindParam( ':Primer_Nombre', $datos[ 'nombre1' ], \PDO::PARAM_STR );
            $stmt->bindParam( ':segundo_Nombre', $datos[ 'nombre2' ], \PDO::PARAM_STR );
            $stmt->bindParam( ':primer_Apellido', $datos[ 'apellido1' ], \PDO::PARAM_STR );
            $stmt->bindParam( ':segundo_Apellido', $datos[ 'apellido2' ], \PDO::PARAM_STR );
            $stmt->bindParam( ':Correo_Electronico', $datos[ 'Correo' ], \PDO::PARAM_STR );
            $stmt->bindParam( ':Usuario', $datos[ 'Usuario' ], \PDO::PARAM_STR );
            $stmt->bindParam( ':Password', $datos[ 'Password' ], \PDO::PARAM_STR );

            return $stmt->execute()  ? true : false;
        } catch ( \Throwable $th ) {
            return false;
        }
    }

    public static function Login( $datos ) {
        $stmt = ConexionModel::conectar()->prepare( 'SELECT * from usuario where Usuario = :user' );
        $stmt->bindParam( ':user', $datos ['usuario'], \PDO::PARAM_STR );
        $stmt->execute();

        return $stmt->fetch();

    }
}

?>

