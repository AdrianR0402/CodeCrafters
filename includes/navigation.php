<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container-fluid">
        <div class="col md-3">
            <img src="/assets/img/image" class="img-fluid" alt="" id="UserNav">
            <a class="navbar-brand" href="index.php">Usuario </a>


        </div>
        <div class="col md-6">
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-3 px-0 px-md-6  dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Catálogo
                        </a>
                        <div class="dropdown-menu bg-secondary text-uppercase border-0 "
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="peliculas-series.php">Series</a>
                            <a class="dropdown-item text-white" href="peliculas-series.php">Peliculas</a>
                            <a class="dropdown-item text-white" href="peliculas-series.php">Anime</a>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Index") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="index.php">Inicio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "About") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="about.php">Acerca de</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Contact") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Contacto</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Help") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="ayuda.php">Ayuda</a></li>
                </ul>
            </div>
        </div>
        <div class="col md-3">
            <a class="navbar-brand" href="index.php"><img class="float-end" id="logoNav"
                    src="/assets/img/portfolio/portada.jpg" alt="..."></a>

        </div>
        <div>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded text-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>


    </div>
</nav>