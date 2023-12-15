<?php

namespace Model;

use Model\ConexionModel;
use PDO;

class AsignaturaModel
{


    public static function MostrarAsignaturasId($idAlumno)
    {

        $stmt = ConexionModel::conectar()->prepare("SELECT alumno.Primer_Nombre , curso.Nombre_Curso as Nombre_Curso  FROM detalle_asignatura
        inner join alumno on alumno.idAlumno = detalle_asignatura.Alumno_idAlumno
        inner join curso on curso.idCurso = detalle_asignatura.Curso_idCurso
        where Alumno_idAlumno = :Id");
        $stmt->bindParam(':Id', $idAlumno, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
