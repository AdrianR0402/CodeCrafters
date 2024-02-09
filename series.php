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

                                    <span class="text-bold">one piece</span>
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
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Billy-the-Kid" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color5@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Pesadillas</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Pesadillas" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color7@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kraven</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="kraven" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color8@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Hunger Games</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Hunger-Games" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color10@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Old</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Old" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color11@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Objetos</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Objetos" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color12@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Oblivion</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Oblivion" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color18@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Patrulla Canina</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Patrulla-Canina" />
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
                                <img src="/assets/img/background-color4@2x.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">

                                    <span class="text-bold">one piece</span>
                                <form action="procesarFormulario.php" method="POST">
                                    <input type="hidden" name="nombre" value="one-piece" />
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
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Billy-the-Kid" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color5@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Pesadillas</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Pesadillas" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color7@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kraven</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="kraven" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color8@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Hunger Games</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Hunger-Games" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color10@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Old</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Old" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color11@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Objetos</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Objetos" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color12@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Oblivion</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Oblivion" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color18@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Patrulla Canina</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Patrulla-Canina" />
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
                                <img src="/assets/img/background-color4@2x.png"
                                    class="float-left  mx-auto img-thumbnail imagentarjeta" alt="Primera Imagen ">
                                <p class="mt-2 text-white nombre">

                                    <span class="text-bold">one piece</span>
                                <form action="procesarFormulario.php" method="POST">
                                    <input type="hidden" name="nombre" value="one-piece" />
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
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Billy-the-Kid" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color5@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Pesadillas</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Pesadillas" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color7@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Kraven</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="kraven" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color8@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Hunger Games</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Hunger-Games" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color10@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold ">Old</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Old" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color11@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Objetos</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Objetos" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color12@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Oblivion</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Oblivion" />
                                        <input type="submit" name="subir" value="detalles" />
                                    </form>
                                </p>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 containertarjeta">
                                <img src="/assets/img/background-color18@2x.png"
                                    class="float-left  mx-auto  img-thumbnail imagentarjeta" alt="Primera Imagen">
                                <p class="mt-2 text-white nombre">
                                    <span class="text-bold">Patrulla Canina</span>
                                    <form action="procesarFormulario.php" method="POST">
                                        <input type="hidden" name="nombre" value="Patrulla-Canina" />
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