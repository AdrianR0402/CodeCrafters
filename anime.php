<!DOCTYPE html>
<?php require_once 'UsuariosController.php'; ?>
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
                        <img src="/assets/img/portfolio/imagenesAnime/banner1.jpg"
                            class="d-block w-100 fixed-size-image imagencarusel" alt="imagen1">
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/portfolio/imagenesAnime/banner2.jpg"
                            class="d-block w-100 fixed-size-image imagencarusel" alt="imagen2">
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/portfolio/imagenesAnime/banner3.jpeg"
                            class="d-block w-100 fixed-size-image imagencarusel" alt="imagen3">
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
                                <img src="/assets/img/portfolio/imagenesAnime/1.jpg"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">JuJutsu Kaisen</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Jujutsu-Kaisen" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/2.jpg"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Death Note</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Death-Note" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/3.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Full Metal</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Full-Metal" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/4.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kimetsu</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Kimetsu" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/5.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Steins Gate</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Steins-Gate" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/6.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">One Punch Man </span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="One-Punch-Man" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/7.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Black Clover</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Black-Clover" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/8.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">HunterXHunter</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="HunterxHunter" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/9.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Dragon Ball</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Dragon-Ball" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
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
                                <img src="/assets/img/portfolio/imagenesAnime/1.jpg"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">JuJutsu Kaisen</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Jujutsu-Kaisen" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/2.jpg"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Death Note</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Death-Note" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/3.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Full Metal</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Full-Metal" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/4.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kimetsu</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Kimetsu" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/5.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Steins Gate</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Steins-Gate" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/6.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">One Punch Man </span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="One-Punch-Man" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/7.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Black Clover</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Black-Clover" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/8.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">HunterXHunter</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="HunterxHunter" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/9.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Dragon Ball</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Dragon-Ball" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
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
                                <img src="/assets/img/portfolio/imagenesAnime/1.jpg"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">JuJutsu Kaisen</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Jujutsu-Kaisen" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/2.jpg"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Death Note</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Death-Note" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/3.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Full Metal</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Full-Metal" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/4.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kimetsu</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Kimetsu" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/5.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Steins Gate</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Steins-Gate" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/6.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">One Punch Man </span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="One-Punch-Man" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/7.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Black Clover</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Black-Clover" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/8.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">HunterXHunter</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="HunterxHunter" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesAnime/9.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Dragon Ball</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Dragon-Ball" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



            </section>
        </main>
    </section>
    <?php include("includes/footer.php"); ?>




</body>

</html>