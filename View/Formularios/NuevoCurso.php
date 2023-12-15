<?php

use Controller\CursoController;

$curso = new CursoController();


?>

<div class="d-flex flex-column min-vh-100 justify-content-evenly align-items-center" >

        <div class="card mb-5 p-5 bg-dark bg-gradient text-white col-md-5">

            <div class="card-header text-center">
                <h4> Formulario Curso</h4>
            </div>

            <div class="card-body mt-3">

                <form method='POST'>

                    <div class="input-group form-group mt-3">
                        <input type="text" class="form-control text-center p-3" placeholder="Nombre de Curso" name="Nombre_Curso" required>
                    </div>


                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $resultado = $curso->AgregarCurso();
                        if ($resultado == false) {
                            echo "
                        <div class='text-center'>
                        <div class='alert alert-danger mt-3 w-100 p-2 ' role='alert'>Error No Guardado</div>
                        </div>";
                        } elseif ($resultado == true) {
                            echo "
                        <div class='text-center'>
                            <div class='alert alert-success mt-3 w-100 p-2 ' role='alert'>Guardado Con Exito</div>
                        </div>";
                        }
                    }
                    ?>

                    <div class="text-center">
                        <input type="submit" value="Guardar Curso" class="btn btn-primary mt-3 w-100 p-2">
                    </div>
                </form>

                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>

            </div>

        </div>

    </div>
