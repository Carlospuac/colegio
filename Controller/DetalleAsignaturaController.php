<?php
namespace Controller;

use Model\AsignaturaModel;

class DetalleAsignaturaController{

    public Function AsignarCurso(){




    }

    public Function MostarAsignatura(){
        
        $idAlumno = $_GET['idAlumno'];

        $Respuesta =  AsignaturaModel::MostrarAsignaturasId($idAlumno);

        return $Respuesta;




    }




}


?>