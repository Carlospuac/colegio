<?php

use Controller\GradoController;

$Grado = new GradoController();


?>

<h1 class="text-center">Agregar Grado</h1>

<div class="container-fluid text-center">

    <div class='form-group text-primary-emphasis '>

        <form method='POST'>

            <strong>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='col-form-label mt-4'>Nombre Grado:</label>
                    </div>
                    <div class='col-6 col-md-4'>
                        <input type='text' class='form-control mt-4' name='Nombre_Grado' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-12 col-sm-7'>
                        <button type='submit' class='btn btn-primary btn-lg mt-4'>Guardar Grado</button>
                    </div>
                </div>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $resultado = $Grado->AgregarGrado();
                    if ($resultado == false) {
                        echo "<div class='alert alert-danger mt-5' role='alert'> Error en los datos </div>";
                    } elseif ($resultado == true) {
                        echo "
                        <div class='row'>
                            <div class='col-12 col-sm-7'>
                                <button type='button' class='btn btn-success disabled btn-lg mt-5'>Grado Agregado con exito</button>
                            </div>
                        </div> ";
                    }
                }
                ?>

            </strong>

        </form>

    </div>

</div>