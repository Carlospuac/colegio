<?php

require_once('vendor/autoload.php');

use Controller\PaginaController;

$capturaEnlace = new PaginaController();

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Alumnos</title>
    <!-- links datables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- links bootstrap -->
    <link rel='stylesheet' href='View/bootstrap.css'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'> </script>
   
    <!-- links iconos -->
    <script src='https://kit.fontawesome.com/2dc1d5a3bb.js' crossorigin='anonymous'></script>


    <style>
    body {
        display: flex;
        flex-direction: column;
        height: 100vh;
        margin: 0;

    }

    .f {
        flex: 2;
        background-image: url(img/principal/fondoaula.jpg);
        background-repeat: no-repeat;
        background-size: cover;

    }
    
    </style>


</head>

<body>


    <?php require_once('NavBar.php'); ?>



    <div class="f">
         

        <?php $capturaEnlace->enlacesPagina(); ?>

    </div>


    <!-- links datables -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
   
    <script src="View/script.js"></script>






</body>

</html>