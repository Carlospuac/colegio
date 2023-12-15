<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="Index.php?action=Inicio">Inicio
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>

                <?php
                if (!empty($_SESSION['Usuario'])  ) {
                ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Cursos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Index.php?action=ListCurso">Lista</a>
                        <?php
                if (!empty($_SESSION['Usuario']) && ($_SESSION['RolUsuario']) =='1'  ) {
                ?>
                        <a class="dropdown-item" href="Index.php?action=AgregarCurso">Agregar</a>
                    </div>
                <?php
                }
                ?>   
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Alumnos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Index.php?action=listadoalumnos">Lista</a>
                        <a class="dropdown-item" href="Index.php?action=Crear">Agregar</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Grados</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Index.php?action=ListGrado">Lista</a>
                        <a class="dropdown-item" href="Index.php?action=AgregarGrado">Agregar</a>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
            <div class="dropstart">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Usuarios <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i></button>
                <ul class="dropdown-menu">
                    <?php
                    if (!empty($_SESSION['Usuario'])) {
                    ?>
                        <li><a class="dropdown-item" href="Index.php?action=Logout">Log out <i class="fa-solid fa-user-tie" style="color: #ffffff;"></i> </a></li>
                    <?php
                    } else {
                    ?>
                        <li><a class="dropdown-item" href="Index.php?action=Login">Log In <i class="fa-solid fa-user-tie" style="color: #ffffff;"></i> </a></li>

                    <?php
                    }
                    ?>

                    <li><a class="dropdown-item" href="Index.php?action=Crearusuario"> Crear Usuario <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i></a></li>


                </ul>
            </div>
        </div>
    </div>
</nav>