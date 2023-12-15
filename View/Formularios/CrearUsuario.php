<?php

use Controller\UsuarioController;

$usuario = new UsuarioController();
?>

<h1>Iniciar Sesion</h1>

<div class="container-fluid text-center">

    <div class='form-group text-primary-emphasis '>
        <strong>
            <form method='POST'>

                <input type='hidden' name='token' value="<?php echo $_SESSION['token'] ?? ''; ?>">

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Primer Nombre</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='nombre1' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Segundo Nombre</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='nombre2' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Primer Apellido</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='apellido1' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Segundo Apellido</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='apellido2' required>
                    </div>
                </div>


                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Correo Electronico</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='email' class='form-control mt-4' name='Correo' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Usuario</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='Usuario' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Contraseña</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='password' class='form-control mt-4' name='Password' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-12 col-sm-7'>
                        <button type='submit' class='btn btn-primary btn-lg mt-4'>Crear Usuario</button>
                    </div>
                </div>

            </form>
            <?php

            $resultado = $usuario->CrearUsuario();
            if ($resultado == 'error') {
                echo "<div class='alert alert-danger mt-5' role='alert'>
                        Error en los datos
                     </div>";
            }

            ?>

        </strong>
    </div>
</div>