<?php

namespace Controller;

use Model\UsuarioModel;

class UsuarioController
{

    public function CrearUsuario()
    {
        if (!empty($_POST['nombre1']) && !empty($_POST['nombre2']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) && !empty($_POST['Correo']) && !empty($_POST['Usuario']) && !empty($_POST['Password'])) {

            $nombre1 = strClean($_POST['nombre1']);
            $nombre2 = strClean($_POST['nombre2']);
            $apellido1 = strClean($_POST['apellido1']);
            $apellido2 = strClean($_POST['apellido2']);
            $Correo = strClean($_POST['Correo']);
            $Usuario = strClean($_POST['Usuario']);
            $Password = strClean($_POST['Password']);

            $Password = password_hash($Password, PASSWORD_ARGON2ID);

            $datos = array(
                'nombre1' => $nombre1,
                'nombre2' => $nombre2,
                'apellido1' => $apellido1,
                'apellido2' => $apellido2,
                'Correo' => $Correo,
                'Usuario' => $Usuario,
                'Password' => $Password,
            );

            $respuesta = UsuarioModel::GuardarUsuario($datos);
            print_r($datos);
            if ($respuesta == true) {
                header('location: Index.php?action=Login');
            }
            return $respuesta;
        }
    }

    public function login()
    {

        $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if (empty($token) || empty($_POST['Usuario']) || empty($_POST['Pass'])) {
            return 'error';
        } {
            $usuario = strClean($_POST['Usuario']);
            $password = strClean($_POST['Pass']);

            $datos = array (
                'usuario' => $usuario,
                'password' => $password,

            );

          
            $respuesta = UsuarioModel::Login($datos);

            if ($respuesta && $respuesta['Usuario'] == $usuario && password_verify($password, $respuesta['Password'])) {
            
                $_SESSION['nombre1'] = $respuesta['Primer_Nombre'];
                $_SESSION['nombre2'] = $respuesta['segundo_Nombre'];
                $_SESSION['apellido1'] = $respuesta['primer_Apellido'];
                $_SESSION['apellido2'] = $respuesta['segundo_Apellido'];
                $_SESSION['Usuario'] = $respuesta['Usuario'];
                $_SESSION['RolUsuario'] = $respuesta['Id_Rol_Usuario'];
                $_SESSION['Id'] = $respuesta['idusuario'];

                header("location: index.php?action=Inicio&id={$respuesta['idUsuario']}");
            } else {

                return 'error';
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header("location: index.php?action=Inicio");
    }
}
