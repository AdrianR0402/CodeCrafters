<?php require_once 'Model/Usuarios.php'; ?>
<!--CF2: En versión móvil el navbar no se parece a lo que habéis definido en la guía de estilos-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <style>

    </style>
    <div class="container-fluid">

        <!--CF2: ¿Quieres decir col-md-3? ¿Donde está el row?-->

        <div class="col md-3">
            <?php
            if (!isset($_SESSION['access_token'])) {
                $login_button = '<a href="' . $google_client->createAuthUrl() . '" class="btn btn-primary"><img src="assets/img/sign-in-with-google.png" id="imgGoogle" /></a>';
            }
            if (isset($_SESSION["usuario"])) {
                $usuario = $_SESSION['usuario'];

                echo "<a href='password.php'><img id='imagenUsuario' src='assets/img/fondoUsuarios.png'/>";
                echo '<span id="span">' . $usuario->username . '</span>';
                echo '<a href="logout.php">Cerrar Sesion</a>';

            } elseif (isset($_SESSION['user_first_name']) && $_SESSION['user_last_name'] && $login_button == '') {
                echo '<img id="imagenUsuario" src="' . $_SESSION["user_image"] . '" referrerpolicy="no-referrer" />';
                echo '<span id="span">' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</span>';
                echo '<a class="logout-link" href="logout.php">Cerrar Sesion</a>';

            } else {
                echo '<div align="left">';
                echo '<a href="login.php" class="btn btn-primary">login</a>';
                echo '<a href="register.php" class="btn btn-primary">register</a>';
                echo '</div>';
            }
            ?>
            <?php


            ?>
        </div>



        <div class="col md-6">
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-3 px-0 px-md-6  dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Catálogo
                        </a>
                        <div class="dropdown-menu bg-secondary text-uppercase border-0 "
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="series.php">Series</a>
                            <a class="dropdown-item text-white"
                                href="peliculas.php">Peliculas</a><!--dropnow para las diferentes tipos de peliculas  -->
                            <a class="dropdown-item text-white" href="anime.php">Anime</a>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-md-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Index") { ?>active<?php } ?> py-3 px-0 px-md-3 rounded"
                            href="/index.php">Inicio</a></li>
                    <li class="nav-item mx-0 mx-md-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "acercaDe") { ?>active<?php } ?> py-3 px-0 px-md-3 rounded"
                            href="/acercaDe.php">Acerca~DE</a></li>
                    <!--esta parte se utiliza para que salga marcada la pagina en la que estas  -->
                    <li class="nav-item mx-0 mx-md-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Contact") { ?>active<?php } ?> py-3 px-0 px-md-3 rounded"
                            href="/contact.php">Contacto</a></li>
                    <li class="nav-item mx-0 mx-md-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "ayuda") { ?>active<?php } ?> py-3 px-0 px-md-3 rounded"
                            href="/ayuda.php">Ayuda</a></li>
                    <li class="nav-item mx-0 mx-md-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "juegos") { ?>active<?php } ?> py-3 px-0 px-md-3 rounded"
                            href="/juegos.php">Juegos</a></li>
                </ul>
            </div>
        </div>
        <div class="col md-3">
            <a class="navbar-brand" href="index.php"><img class="float-end" id="logoNav"
                    src="/assets/img/portfolio/portada.jpg" alt="..."></a><!--logo -->

        </div>
        <div>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded text-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><!--la funcionalidad de el navbar responsivo-->
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>


    </div>
</nav>