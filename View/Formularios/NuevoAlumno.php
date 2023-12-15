<?php

use Controller\AlumnoController;
use Controller\GradoController;

$alumnoNuevo = new AlumnoController();

$Grado = new GradoController()

?>


<div class="container-fluid text-center">

    <h1>ingrese Alumno</h1>

    <div class='form-group text-primary-emphasis '>

        <form method='POST'>

            <strong>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='col-form-label mt-4'>Primer Nombre :</label>
                    </div>
                    <div class='col-6 col-md-4'>
                        <input type='text' class='form-control mt-4' name='Primer_Nombre' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='col-form-label mt-4'>Segundo Nombre :</label>
                    </div>
                    <div class='col-6 col-md-4'>
                        <input type='text' class='form-control mt-4' name='Segundo_Nombre' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='col-form-label mt-4'>Primer Apellido</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='Primer_Apellido' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='col-form-label mt-4'>Segundo Apellido</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='Segundo_Apellido' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='form-label mt-4'>Direccion Casa</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' placeholder='Guatemala 9-13' name='Direccion_Casa' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='form-label mt-4'>Fecha Nacimiento</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='date' class='form-control mt-4' name='Fecha_Nacimiento' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='form-label mt-4'>Numero Telefonico</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='number' class='form-control mt-4' placeholder='58585353' name='Numero_Telefonico' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='form-label mt-4'>Correo Electronico</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='email' class='form-control mt-4' placeholder='mario@gmail.com' name='Correo_Electronico' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='form-label mt-4'>Grado</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <select class='form-select mt-4' name='idGrado'>
                            <?php
                            foreach ($Grado->MostrarGrado() as $row => $item) {

                                echo "<option value='{$item['idgrado']}'> {$item['Nombre_Grado']} </option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-md-2 '>
                        <label class='form-label mt-4'>Fecha Inscripcion</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='date' class='form-control mt-4' name='Fecha_inscripcion' required>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-12 col-sm-7'>
                        <button type='submit' class='btn btn-primary btn-lg mt-4'>Registrar Estudiante</button>
                    </div>
                </div>

            </strong>
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $resultado = $alumnoNuevo->CrearAlumno();
                if ($resultado == false) {
                    echo "<div class='alert alert-danger mt-5' role='alert'> Error en los datos </div>";
                } elseif ($resultado == true) {
                    echo "
                    <div class='row'>
                        <div class='col-12 col-sm-7'>
                            <button type='button' class='btn btn-success disabled btn-lg mt-5'>Alumno Agregado Con Exito</button>
                        </div>
                    </div> ";
                }
            }
            ?>

        </form>

    </div>
</div>