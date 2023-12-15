<?php

use Controller\UsuarioController;

$usuario = new UsuarioController();
?>


<div class="d-flex flex-column min-vh-100% justify-content-center align-items-center" >

    <div class="card mb-5 p-5 bg-dark bg-gradient text-white col-md-4">

        <div class="card-header text-center">
            <h3>Iniciar sesión </h3>
        </div>

        <div class="card-body mt-3">

            <form action="" method='POST'>

                <input type='hidden' name='token' value="<?php echo $_SESSION['token'] ?? ''; ?>">

                <div class="input-group form-group mt-3">
                    <input type="text" class="form-control text-center p-3" placeholder="Usuario" name="Usuario" required>
                </div>

                <div class="input-group form-group mt-3">
                    <input type="password" class="form-control text-center p-3" placeholder="Contraseña" name="Pass" required>
                </div>

                <div class="text-center">
                    <input type="submit" value="Acceder" class="btn btn-primary mt-3 w-100 p-2" name="login-btn">
                </div>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $resultado = $usuario->login();

                if ($resultado == 'error') {
                    echo "<div class='alert alert-danger mt-3' role='alert'>
                    Error en los datos
                 </div>";
                }
            }
            ?>
        </div>
        <div class="card-footer p-3">
            <div class="d-flex justify-content-center">
                <div class="text-primary">If you are a registered user, login here.</div>
            </div>
        </div>
    </div>

</div>