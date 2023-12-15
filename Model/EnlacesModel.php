<?php

namespace Model;

class EnlacesModel
{
    public static function enlacesPagina($enlace)
    {
        $modulo = match ($enlace) {
            'Inicio' => 'View/Inicio.php',
            'Login' => 'View/Formularios/Login.php',
            'Crearusuario' => 'View/Formularios/CrearUsuario.php',
            'Logout' => 'View/Logout.php',
            'Crear' => 'View/Formularios/NuevoAlumno.php',
            'listadoalumnos' => 'View/Listas/ListadoAlumnos.php',
            'ModificarAlumno' => 'View/Formularios/ModificarAlumno.php',
            'AgregarCurso' => 'View/Formularios/NuevoCurso.php',
            'ListCurso' => 'View/Listas/ListaCurso.php',
            'AgregarGrado' => 'View/Formularios/NuevoGrado.php',
            'ListGrado' => 'View/Listas/ListaGrado.php',
            'descargarExcel' => 'View/Reportes/Descargalistado.php',
            'descargarpdf' => 'View/Reportes/Pdf.php',
            'Listagradoalumno' => 'View/Listas/Listagradoalumno.php',
            'asignacion'=> 'View/Asignacion.php',
            'Ingresarfoto'=>'View/ingresarfoto.php',


            default => 'View/Inicio.php'
        };
        return $modulo;
    }
}
