<?php


use Controller\AlumnoController;
use Controller\DetalleAsignaturaController;
use Controller\GradoController;
use Controller\CursoController;

// consultar datos alumno 
$alumno = new AlumnoController();
$dato = $alumno->VerAlumno();

//consultar datos grado
$Grado = new GradoController();

//consultar datos de asignacion
$asignacion = new DetalleAsignaturaController;
$listaCurso = $asignacion->MostarAsignatura();

//consultar datos Curso
$Curso = new CursoController();
$listadocurso = $Curso->MostrarCurso();

?>

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active" aria-current="page"> Expediente de <?php echo  $dato['Primer_Nombre'] . ' ' . $dato['Primer_Apellido'];  ?></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src=" <?php echo  $dato['Ruta_Foto'];  ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"> <?php echo  $dato['Primer_Nombre'] . ' ' . $dato['Primer_Apellido'];  ?> </h5>
                        <p class="text-muted mb-1"></p>
                        <?php
                        foreach ($Grado->MostrarGrado() as $row => $item) {
                            if ($dato['Id_Grado'] == $item['idgrado']) {
                                echo "<p class='text-muted mb-4'>Grado: {$item['Nombre_Grado']}</p>";
                            }
                        }
                        ?>

                        <div class="d-flex justify-content-center mb-2">
                            <form action="Index.php?action=Ingresarfoto&idAlumno=<?php echo $dato['idAlumno']; ?>" method="POST" enctype="multipart/form-data">
                                <input class='input mb-3' type="file" name="archivo[]" multiple>
                                <button type="submit" class="btn btn-outline-primary ms-1 mt-3">Guardar Imagen</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nombre</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo  $dato['Primer_Nombre'] . ' ' . $dato['Segundo_Nombre'] . ' ' . $dato['Primer_Apellido'] . ' ' . $dato['Segundo_Apellido'];  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"> <?php echo  $dato['Correo_Electronico'];  ?> </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Fecha Nacimiento</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"> <?php echo  $dato['Fecha_Nacimento']   ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Telofono</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo  $dato['Numero_Telefonico']  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Direccion</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo  $dato['Direccion_Casa']   ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Fecha de Inscripcion</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo  $dato['Fecha_Inscripcion']   ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class='row'>
                    <?php
                    // Verificar si $listaCurso trae datos
                    if (!sizeof($listaCurso)) {
                    } else {
                        foreach ($listaCurso as $row => $item) {

                            echo "
                                    <div class='col-md-6 mb-2'>
                                        <div class='card mb-4 mb-md-0'>
                                            <div class='card-body'>
                                                <p class='mb-1'> <span style='font-size: 20px' class='text-primary font-italic me-1'>  {$item['Nombre_Curso']} </span></p>
                                            </div>
                                        </div>
                                    </div>";
                        }
                    }
                    ?>
                    <div class='col-md-6 mb-2'>
                        <div class='card mb-4 mb-md-0'>
                            <div class='card-body'>
                                <div class='row g-2 align-items-center'>
                                    <div class='col-auto'>
                                        <select class='form-select mt-0' name='idCurso'>
                                            <?php
                                            foreach ($listadocurso as $rowcurso => $itemcurso) {
                                                echo "<option value='{$itemcurso['idCurso']}' selected> {$itemcurso['Nombre_Curso']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class='col-auto'>
                                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
</section>