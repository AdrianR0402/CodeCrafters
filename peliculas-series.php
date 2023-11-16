<!DOCTYPE html>
<?php include("includes/a_config.php"); ?>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body class="series-Peliculas">
    <?php include("includes/navigation.php"); ?>
    <header>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active carrusel"><!--pon height 200px y d-block w-100-->
                    <img src="https://hips.hearstapps.com/es.h-cdn.co/fotoes/images/media/imagenes/reportajes/los-posters-latinos-de-peliculas-miticas/catwoman/7124393-1-esl-ES/catwoman.jpg?resize=980:*"
                        class="img-fluid" alt="...">
                </div>
                <div class="carousel-item carrusel">
                    <img src="https://hips.hearstapps.com/es.h-cdn.co/fotoes/images/media/imagenes/reportajes/los-posters-latinos-de-peliculas-miticas/desayunocondiamantes/7124363-1-esl-ES/desayunocondiamantes.jpg?resize=980:*"
                        class="img-fluid" alt="...">
                </div>
                <div class="carousel-item carrusel">
                    <img src="https://hips.hearstapps.com/es.h-cdn.co/fotoes/images/media/imagenes/reportajes/los-posters-latinos-de-peliculas-miticas/confaldasyaloloco/7124387-1-esl-ES/confaldasyaloloco.jpg?resize=980:*"
                        class="img-fluid" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <main>
        <section class="page-section series-Peliculas " id="series-Peliculas">
            <div class="container-fluid mt-5 ">

                <h2 class="mb-4">Carteles de Películas</h2>

                <div class="d-flex overflow-x" style="white-space: nowrap;">
                    <div>
                        <div class="col-md-4">
                            <img src="assets/img/background-color4@2x.png" class="float-left mx-auto  img-thumbnail"
                                alt="Primera Imagen">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                            </p>
                        </div>
                    </div>


                    <div class="">
                        <div class="col-md-4">
                            <img src="assets/img/background-color3@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                            </p>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-md-4">
                            <img src="assets/img/background-color5@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-4">
                            <img src="assets/img/background-color7@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-4">
                            <img src="assets/img/background-color8@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-md-4">
                            <img src="assets/img/background-color9@2x.png" class="float-left  mx-auto  img-thumbnail"
                                alt="Primera Imagen">
                            <p class="mt-2 text-white" style="font-size: 30px;">
                                <span class="text-bold">Titulo Pelicula 1</span>
                            </p>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>