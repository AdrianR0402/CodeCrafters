<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body class="series-Peliculas">
    <?php include("includes/navigation.php"); ?>
    <header>
        <div id="carouselExampleRide" class="carousel slide mx-auto text-center " data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="assets/img/banner1.jpg"
                        class="d-block w-100 fixed-size-image" style="height: 800px" alt="imagen1">
                </div>
                <div class="carousel-item ">
                    <img src="assets/img/banner2.webp"
                        class="d-block w-100 fixed-size-image" style="height: 800px" alt="imagen2">
                </div>
                <div class="carousel-item ">
                    <img src="assets/img/banner3.jpg"
                        class="d-block w-100 fixed-size-image" style="height: 800px" alt="imagen3">
                </div>
            </div>
            <button class="carousel-control-prev visually-hidden" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next visually-hidden" type="button" data-bs-target="#carouselExampleRide"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main>
        <section class="series-Peliculas " id="series-Peliculas">
            <!-- Recomendaciones -->
            <div class="container-fluid mt-5 ">

                <h2 class="mb-4 colorTitulo">Recomendaciones</h2>

                <div class="d-flex " style="white-space: nowrap;">
                    <div>
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color4@2x.png" class="img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">One Piece</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>


                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color3@2x.png" class="img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Billy the Kid</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color5@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Pesadillas</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color7@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Kraven</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color8@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Hunger Games</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white " style="font-size: 30px;">
                                <span class="text-bold ">Old</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Novedades -->
            <div class="container-fluid mt-5 ">

                <h2 class="mb-4 colorTitulo">Novedades</h2>

                <div class="d-flex " style="white-space: nowrap;">
                    <div>
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color4@2x.png" class="img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">One Piece</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>


                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color3@2x.png" class="img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Billy the Kid</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color5@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Pesadillas</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color7@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Kraven</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color8@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Hunger Games</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white " style="font-size: 30px;">
                                <span class="text-bold ">Old</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Por tus anteriores Vistas -->
            <div class="container-fluid mt-5 ">

                <h2 class="mb-4 colorTitulo">Por tus anteriores Vistas</h2>

                <div class="d-flex " style="white-space: nowrap;">
                    <div>
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color4@2x.png" class="img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">One Piece</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>


                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color3@2x.png" class="img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Billy the Kid</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color5@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Pesadillas</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color7@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Kraven</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color8@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Hunger Games</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white " style="font-size: 30px;">
                                <span class="text-bold ">Old</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-6" style="margin-right: 20px;">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen" style="max-width: none; height: auto;width: 300px; margin-right: 10px; ">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                                <button class="btn btn-link btn-sm" onclick="mostrarVentanaEmergente('One Piece','Anime','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')">Ver más</button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </section>
    </main>
    <?php include("includes/footer.php"); ?>



<!-- Ventana Emergente -->
<div class="modal" tabindex="-1" role="dialog" id="ventanaEmergente">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Caracteristicas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Nombre</h4>
                    <p id="texto1"></p>
                    <h4>Categoria</h4>
                    <p id="texto2"> </p>
                    <h4>Duracion</h4>
                    <p id="texto3"></p>
                    <h4>Descripcion</h4>
                    <p id="texto4"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<!-- Scrip para que el boton muestre la ventana emergente -->
    <script>
        function mostrarVentanaEmergente(texto1,texto2,texto3,texto4) {
            document.getElementById('texto1').innerText = texto1;
            document.getElementById('texto2').innerText = texto2;
            document.getElementById('texto3').innerText = texto3;
            document.getElementById('texto4').innerText = texto4;
            var ventanaEmergente = new bootstrap.Modal(document.getElementById('ventanaEmergente'));
            ventanaEmergente.show();
        }
    </script>

</body>

</html>