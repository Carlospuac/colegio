<?php

namespace Controller;

use Model\AlumnoModel;

class AlumnoController
{

    public function CrearAlumno()
    {

        if (
            !empty($_POST['Primer_Nombre']) && !empty($_POST['Segundo_Nombre']) && !empty($_POST['Primer_Apellido']) && !empty($_POST['Segundo_Apellido']) && !empty($_POST['Direccion_Casa']) && !empty($_POST['Fecha_Nacimiento']) && !empty($_POST['Numero_Telefonico']) && !empty($_POST['Correo_Electronico']) && !empty($_POST['Fecha_inscripcion']) && !empty($_POST['idGrado'])
        ) {
            $Primer_Nombre = strClean($_POST['Primer_Nombre']);
            $Segundo_Nombre = strClean($_POST['Segundo_Nombre']);
            $Primer_Apellido = strClean($_POST['Primer_Apellido']);
            $Segundo_Apellido = strClean($_POST['Segundo_Apellido']);
            $Direccion_Casa = strClean($_POST['Direccion_Casa']);
            $Fecha_Nacimiento = strClean($_POST['Fecha_Nacimiento']);
            $Numero_Telefonico = strClean($_POST['Numero_Telefonico']);
            $Correo_Electronico = strClean($_POST['Correo_Electronico']);
            $Fecha_inscripcion = strClean($_POST['Fecha_inscripcion']);
            $idGrado = strClean($_POST['idGrado']);

            $datos = array(
                'Primer_Nombre' => $Primer_Nombre,
                'Segundo_Nombre' => $Segundo_Nombre,
                'Primer_Apellido' => $Primer_Apellido,
                'Segundo_Apellido' => $Segundo_Apellido,
                'Direccion_Casa' => $Direccion_Casa,
                'Fecha_Nacimiento' => $Fecha_Nacimiento,
                'Numero_Telefonico' => $Numero_Telefonico,
                'Correo_Electronico' => $Correo_Electronico,
                'Fecha_inscripcion' => $Fecha_inscripcion,
                'idGrado' => $idGrado,
            );
            $respuesta = AlumnoModel::GuardarAlumno($datos);

            return $respuesta;
        }
    }

    public function MostrarAlumno()
    {

        $respuesta = AlumnoModel::ListaAlumno();

        return $respuesta;
    }

    public function MostrarAlumnoGrado()
    {   
        $IdGrado = $_GET['IdGrado'];

        $respuesta = AlumnoModel::ListaAlumnoGrado($IdGrado);

        return $respuesta;
    }



    public function VerAlumno()
    {
        $idAlumno = $_GET['idAlumno'];
        $verAlumno = AlumnoModel::VerAlumno($idAlumno);
        return $verAlumno;
    }

    public function ActualizarAlumno(){
        if (
            !empty($_POST['Primer_Nombre']) && !empty($_POST['Segundo_Nombre']) && !empty($_POST['Primer_Apellido']) && !empty($_POST['Segundo_Apellido']) && !empty($_POST['Direccion_Casa']) && !empty($_POST['Fecha_Nacimiento']) && !empty($_POST['Numero_Telefonico']) && !empty($_POST['Correo_Electronico']) && !empty($_POST['Fecha_inscripcion']) && !empty($_POST['idGrado']) && !empty($_POST['ID'])
        ) {
            $Primer_Nombre = strClean($_POST['Primer_Nombre']);
            $Segundo_Nombre = strClean($_POST['Segundo_Nombre']);
            $Primer_Apellido = strClean($_POST['Primer_Apellido']);
            $Segundo_Apellido = strClean($_POST['Segundo_Apellido']);
            $Direccion_Casa = strClean($_POST['Direccion_Casa']);
            $Fecha_Nacimiento = strClean($_POST['Fecha_Nacimiento']);
            $Numero_Telefonico = strClean($_POST['Numero_Telefonico']);
            $Correo_Electronico = strClean($_POST['Correo_Electronico']);
            $Fecha_inscripcion = strClean($_POST['Fecha_inscripcion']);
            $idGrado = strClean($_POST['idGrado']);
            $ID = strClean($_POST['ID']);

            $datos = array(
                'Primer_Nombre' => $Primer_Nombre,
                'Segundo_Nombre' => $Segundo_Nombre,
                'Primer_Apellido' => $Primer_Apellido,
                'Segundo_Apellido' => $Segundo_Apellido,
                'Direccion_Casa' => $Direccion_Casa,
                'Fecha_Nacimiento' => $Fecha_Nacimiento,
                'Numero_Telefonico' => $Numero_Telefonico,
                'Correo_Electronico' => $Correo_Electronico,
                'Fecha_inscripcion' => $Fecha_inscripcion,
                'idGrado' => $idGrado,
                'ID' => $ID,
            );
            $respuesta = AlumnoModel::ActualizarAlumno($datos);

            return $respuesta;
        }

    }
}
