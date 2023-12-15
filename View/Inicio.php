<?php

if (!empty($_SESSION['Usuario'])) {
    echo "
        <h2>
        Mucho gusto: 
            <strong> {$_SESSION['nombre1']} {$_SESSION['apellido1']} </strong>
        </h2>
        ";
}

?>
