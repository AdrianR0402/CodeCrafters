<?php require_once 'UsuariosController.php'; ?>
<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>
<html lang="en">

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
                        <img src="/assets/img/portfolio/imagenesPeliculas/banner1.jpg"
                            class="d-block w-100 fixed-size-image imagencarusel" alt="imagen1">
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/portfolio/imagenesPeliculas/banner2.jpg"
                            class="d-block w-100 fixed-size-image imagencarusel" alt="imagen2">
                    </div>
                    <div class="carousel-item ">
                        <img src="/assets/img/portfolio/imagenesPeliculas/banner3.jpg"
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
                                <img src="/assets/img/portfolio/imagenesPeliculas/1.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Malefica</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Malefica" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/2.jpg"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">DeadPool</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="DeadPool" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/3.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Soy Leyenda</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Soy-Leyenda" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/4.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Justice League</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Justice-League" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/5.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Fallaout</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Fallaout" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/6.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Busqueda </span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Busqueda" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/7.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Avengers</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Avengers" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/8.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Rocky</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Rocky" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/9.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Scarface</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Scarface" />
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
                                <img src="/assets/img/portfolio/imagenesPeliculas/1.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Malefica</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Malefica" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/2.jpg"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">DeadPool</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="DeadPool" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/3.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Soy Leyenda</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Soy-Leyenda" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/4.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Justice League</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Justice-League" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/5.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Fallaout</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Fallaout" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/6.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Busqueda </span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Busqueda" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/7.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Avengers</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Avengers" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/8.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Rocky</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Rocky" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/9.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Scarface</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Scarface" />
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
                                <img src="/assets/img/portfolio/imagenesPeliculas/1.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Malefica</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Malefica" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/2.jpg"
                                    class=" float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">DeadPool</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="DeadPool" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/3.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Soy Leyenda</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Soy-Leyenda" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/4.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Justice League</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Justice-League" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/5.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Fallaout</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Fallaout" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/6.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Busqueda </span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Busqueda" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/7.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Avengers</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Avengers" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/8.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Rocky</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Rocky" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/portfolio/imagenesPeliculas/9.jpg"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Scarface</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Scarface" />
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