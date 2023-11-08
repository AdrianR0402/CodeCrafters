<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container-fluid">
        <div class="col md-4">
            <img src="/assets/img/image" class="img-thumbnail" alt="">
            <a class="navbar-brand" href="index.php">Usuario</a>


        </div>
        <div class="col md-4">
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-3 px-0 px-lg-3  dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Peliculas
                        </a>
                        <div class="dropdown-menu bg-secondary text-uppercase border-0 "
                            aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white" href="#">Series</a>
                            <a class="dropdown-item text-white" href="#">Peliculas</a>
                            <a class="dropdown-item text-white" href="#">Anime</a>
                        </div>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Index") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="index.php">Ayuda</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "About") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="about.php">Acerca de</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a
                            class="nav-link <?php if ($CURRENT_PAGE == "Contact") { ?>active<?php } ?> py-3 px-0 px-lg-3 rounded"
                            href="contact.php">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="col md-4">
            <a class="navbar-brand" href="index.php"><img class="float-end" id="logoNav"
                    src="assets/img/portfolio/portada.jpg" alt="..."></a>
            <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded text-end" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>


    </div>
</nav>