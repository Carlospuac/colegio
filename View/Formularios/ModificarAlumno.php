<?php

use Controller\AlumnoController;
use Controller\GradoController;

$alumno = new AlumnoController();

$dato = $alumno->VerAlumno();

$Grado = new GradoController()

?>


<div class="container-fluid text-center">

    <h1>Modificar Alumno</h1>

    <div class='form-group text-primary-emphasis '>

        <form method='POST'>

            <strong>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='col-form-label mt-4'>Primer Nombre :</label>
                    </div>
                    <div class='col-6 col-md-4'>
                        <input type='text' class='form-control mt-4' name='Primer_Nombre' required value="<?php echo $dato['Primer_Nombre']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='col-form-label mt-4'>Segundo Nombre :</label>
                    </div>
                    <div class='col-6 col-md-4'>
                        <input type='text' class='form-control mt-4' name='Segundo_Nombre' required value="<?php echo $dato['Segundo_Nombre']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='col-form-label mt-4'>Primer Apellido</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='Primer_Apellido' required value="<?php echo $dato['Primer_Apellido']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='col-form-label mt-4'>Segundo Apellido</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' name='Segundo_Apellido' required value="<?php echo $dato['Segundo_Apellido']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='form-label mt-4'>Direccion Casa</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='text' class='form-control mt-4' placeholder='Guatemala 9-13' name='Direccion_Casa' required value="<?php echo $dato['Direccion_Casa']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='form-label mt-4'>Fecha Nacimiento</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='date' class='form-control mt-4' name='Fecha_Nacimiento' required value="<?php echo $dato['Fecha_Nacimento']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='form-label mt-4'>Numero Telefonico</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='number' class='form-control mt-4' placeholder='58585353' name='Numero_Telefonico' required value="<?php echo $dato['Numero_Telefonico']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='form-label mt-4'>Correo Electronico</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='email' class='form-control mt-4' placeholder='mario@gmail.com' name='Correo_Electronico' required value="<?php echo $dato['Correo_Electronico']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-7 col-md-2 '>
                        <label class='form-label mt-4'>Fecha Inscripcion</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <input type='date' class='form-control mt-4' name='Fecha_inscripcion' required value="<?php echo $dato['Fecha_Inscripcion']; ?>">
                    </div>
                </div>

                <div class='row'>
                    <div class='col-6 col-sm-2'>
                        <label class='col-form-label mt-4'>Grado</label>
                    </div>
                    <div class='col-6 col-sm-4'>
                        <select class='form-select mt-4' name='idGrado'>
                            <?php
                            foreach ($Grado->MostrarGrado() as $row => $item) {
                                if ($dato['Id_Grado'] == $item['idgrado']) {
                                    echo "<option value='{$item['idgrado']}' selected> {$item['Nombre_Grado']}  </option>";
                                } else {
                                    echo "<option value='{$item['idgrado']}' > {$item['Nombre_Grado']}  </option>";
                                }
                            }
                            ?>

                        </select>
                    </div>
                </div>

                <input type="hidden" value="<?php echo $dato['idAlumno']; ?>" name="ID">

                <div class='row'>
                    <div class='col-12 col-sm-7'>
                        <button type='submit' class='btn btn-primary btn-lg mt-4'>Guardar Cambios</button>
                    </div>
                </div>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $resultado = $alumno->ActualizarAlumno();
                    if ($resultado == false) {
                        echo "<div class='alert alert-danger mt-5' role='alert'> Error en los datos </div>";
                    } elseif ($resultado == true) {
                        echo "
                        <div class='row'>
                            <div class='col-12 col-sm-7'>
                                <button type='button' class='btn btn-success disabled btn-lg mt-5'>Actaulizado</button>
                            </div>
                        </div> ";
                    }
                }
                ?>

            </strong>

        </form>

    </div>
</div>