<?php require_once 'UsuariosController.php'; ?>
<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body class="series-Peliculas ">
    <section class="page-section">
        <?php include("includes/navigation.php"); ?>
        <header>
            <div id="carouselExampleRide" class="carousel slide mx-auto text-center " data-bs-ride="carousel"
                data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="/assets/img/banner1.jpg" class="d-block w-100 fixed-size-image imagencarusel"
                            alt="imagen1">
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/banner2.webp" class="d-block w-100 fixed-size-image imagencarusel"
                            alt="imagen2">
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/banner3.jpg" class="d-block w-100 fixed-size-image imagencarusel"
                            alt="imagen3">
                    </div>
                </div>
                <button class="carousel-control-prev visually-hidden" type="button"
                    data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next visually-hidden" type="button"
                    data-bs-target="#carouselExampleRide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </header>
        <main>
            <section class="series-Peliculas " id="series-Peliculas">
                <!-- Recomendaciones -->
                <div class="container-fluid mt-5 containerfila">

                    <h2 class="mb-4 colorTitulo">Recomendaciones</h2>

                    <div class="d-flex containerfila2">
                        <div>
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color4@2x.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">

                                    <span class="text-bold">onepiece</span>
                                <form action="procesarFormulario.php" method="POST">
                                    <input type="hidden" name="nombre" value="onepiece" />
                                    <input type="submit" name="subir" value="detalles" />
                                </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color3@2x.png"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Billy the Kid</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/j3Ukftj1VjU')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color5@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Pesadillas</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/oDSYH5VRmAA')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color7@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kraven</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JoWdhvrkKjo')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color8@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Hunger Games</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/NxW_X4kzeus')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color10@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Old</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/01jQv0n9UKs')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color11@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Objetos</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JJa6TxVbyc8')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color12@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Oblivion</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/Pt7TGR8wwdw')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color18@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Patrulla Canina</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/=ocakemeGalc')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Novedades -->
                <div class="container-fluid mt-5 containerfila">

                    <h2 class="mb-4 colorTitulo">Recomendaciones</h2>

                    <div class="d-flex containerfila2">
                        <div>
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color4@2x.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">One Piece</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JoO7TGG2Kms')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color3@2x.png"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Billy the Kid</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/j3Ukftj1VjU')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color5@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Pesadillas</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/oDSYH5VRmAA')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color7@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kraven</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JoWdhvrkKjo')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color8@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Hunger Games</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/NxW_X4kzeus')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color10@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Old</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/01jQv0n9UKs')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color11@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Objetos</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JJa6TxVbyc8')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color12@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Oblivion</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/Pt7TGR8wwdw')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color18@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Patrulla Canina</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/=ocakemeGalc')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Por tus anteriores Vistas -->
                <div class="container-fluid mt-5 containerfila">

                    <h2 class="mb-4 colorTitulo">Recomendaciones</h2>

                    <div class="d-flex containerfila2">
                        <div>
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color4@2x.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">One Piece</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JoO7TGG2Kms')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color3@2x.png"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Billy the Kid</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/j3Ukftj1VjU')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color5@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Pesadillas</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/oDSYH5VRmAA')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color7@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kraven</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JoWdhvrkKjo')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color8@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Hunger Games</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/NxW_X4kzeus')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color10@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Old</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/01jQv0n9UKs')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color11@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Objetos</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/JJa6TxVbyc8')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color12@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Oblivion</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/Pt7TGR8wwdw')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color18@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Patrulla Canina</span>
                                    <button class="btn btn-link btn-sm"
                                        onclick="mostrarVentanaEmergente('One Piece','Series','00:24:00 Por episodio','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','https://www.youtube.com/embed/=ocakemeGalc')">Ver
                                        más</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



            </section>
        </main>
    </section>
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
                    <h4>Trailer</h4>
                </div>

                <div class="d-flex justify-content-center">

                    <div class="ratio ratio-16x9 w-50">
                        <iframe title="Frog" allowfullscreen id="videoFrame"></iframe>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Scrip para que el boton muestre la ventana emergente -->
    <script>
        function mostrarVentanaEmergente(texto1, texto2, texto3, texto4, enlaceVideo) {
            document.getElementById('texto1').innerText = texto1;
            document.getElementById('texto2').innerText = texto2;
            document.getElementById('texto3').innerText = texto3;
            document.getElementById('texto4').innerText = texto4;
            document.getElementById('videoFrame').src = enlaceVideo;
            var ventanaEmergente = new bootstrap.Modal(document.getElementById('ventanaEmergente'));
            ventanaEmergente.show();
        }
    </script>

</body>

</html>