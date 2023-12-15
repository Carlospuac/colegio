<?php

namespace Model;

use Model\ConexionModel;

class AlumnoModel
{

    public static function GuardarAlumno($datos)
    {

        try {
            $stmt = ConexionModel::conectar()->prepare(

                "INSERT INTO alumno (Primer_Nombre,Segundo_Nombre,Primer_Apellido,Segundo_Apellido,Direccion_Casa,Fecha_Nacimento,Numero_Telefonico,Correo_Electronico,Fecha_inscripcion,Id_Grado) VALUES (:nameone,:nametwo,:lastnameone,:lastnametwo,:dir,:naci,:tel,:correo,:insc,:idgrado);"

            );

            $stmt->bindParam(':nameone', $datos['Primer_Nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(':nametwo', $datos['Segundo_Nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(':lastnameone', $datos['Primer_Apellido'], \PDO::PARAM_STR);
            $stmt->bindParam(':lastnametwo', $datos['Segundo_Apellido'], \PDO::PARAM_STR);
            $stmt->bindParam(':dir', $datos['Direccion_Casa'], \PDO::PARAM_STR);
            $stmt->bindParam(':naci', $datos['Fecha_Nacimiento'], \PDO::PARAM_STR);
            $stmt->bindParam(':tel', $datos['Numero_Telefonico'], \PDO::PARAM_STR);
            $stmt->bindParam(':correo', $datos['Correo_Electronico'], \PDO::PARAM_STR);
            $stmt->bindParam(':insc', $datos['Fecha_inscripcion'], \PDO::PARAM_STR);
            $stmt->bindParam(':idgrado', $datos['idGrado'], \PDO::PARAM_STR);
            return $stmt->execute()  ? true : false;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function ListaAlumno(){

        $stmt = ConexionModel::conectar()->prepare(" SELECT idAlumno, concat(Primer_nombre,' ',Segundo_Nombre,' ',Primer_Apellido,' ' ,Segundo_Apellido) Nombre, 
        Fecha_Nacimento ,
        Fecha_Inscripcion,
        Correo_Electronico,
        Numero_Telefonico,
        Direccion_Casa,
        grado.Nombre_Grado as Grado
        FROM alumno
        INNER JOIN grado ON grado.idgrado = alumno.id_Grado;");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public static function ListaAlumnoGrado($IdGrado){

        $stmt = ConexionModel::conectar()->prepare(" SELECT idAlumno, concat(Primer_nombre,' ',Segundo_Nombre,' ',Primer_Apellido,' ' ,Segundo_Apellido) Nombre, 
        Fecha_Nacimento ,
        Fecha_Inscripcion,
        Correo_Electronico,
        grado.Nombre_Grado as Grado
        FROM alumno
        INNER JOIN grado ON grado.idgrado = alumno.id_Grado
        WHERE Id_grado = :Grado ");
        $stmt->bindParam(':Grado', $IdGrado, \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();

    }



    public static function VerAlumno($idAlumno){

        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM alumno WHERE idAlumno = :ID");
        $stmt->bindParam(':ID',$idAlumno, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();


    }

    public static function ActualizarAlumno($datos)
    {

        try {
            $stmt = ConexionModel::conectar()->prepare(

                "UPDATE alumno SET Primer_Nombre = :nameone, Segundo_Nombre = :nametwo, Primer_Apellido =:lastnameone, Segundo_Apellido=:lastnametwo, Direccion_Casa=:dir, Fecha_Nacimento=:naci, Numero_Telefonico=:tel, Correo_Electronico=:correo, Fecha_inscripcion=:insc, Id_Grado=:idgrado WHERE idAlumno = :id "

            );

            $stmt->bindParam(':nameone', $datos['Primer_Nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(':nametwo', $datos['Segundo_Nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(':lastnameone', $datos['Primer_Apellido'], \PDO::PARAM_STR);
            $stmt->bindParam(':lastnametwo', $datos['Segundo_Apellido'], \PDO::PARAM_STR);
            $stmt->bindParam(':dir', $datos['Direccion_Casa'], \PDO::PARAM_STR);
            $stmt->bindParam(':naci', $datos['Fecha_Nacimiento'], \PDO::PARAM_STR);
            $stmt->bindParam(':tel', $datos['Numero_Telefonico'], \PDO::PARAM_STR);
            $stmt->bindParam(':correo', $datos['Correo_Electronico'], \PDO::PARAM_STR);
            $stmt->bindParam(':insc', $datos['Fecha_inscripcion'], \PDO::PARAM_STR);
            $stmt->bindParam(':idgrado', $datos['idGrado'], \PDO::PARAM_STR);
            $stmt->bindParam(':id', $datos['ID'], \PDO::PARAM_STR);
            return $stmt->execute()  ? true : false;
        } catch (\Throwable $th) {
            return false;
        }
    }


}
