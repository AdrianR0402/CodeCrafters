<?php require_once 'UsuariosController.php'; ?>
<?php include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/head-tag-contents.php"); ?>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
        <section class="page-section home" id="inicioSesion">

            <div class="container-fluid py-5 text-left">
                <h3>PELICULA DESTACADA DEL MES</h3>
            </div>
            <div class="row">
                <div class="col md-6 d-flex justify-content-center">
                    <div class="ratio ratio-16x9 mx-4">
                        <iframe src="videos/mikethefrog.mp4" title="Frog" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <h3>La rana loca</h3>
                    <p class="mt-2 letra14 text-center text-white">
                        una rana que le gustaba jugar con las tellevisiones cojio una pala y se fue a jugar con sus
                        amigo, disfrutando el momento
                    </p>
                </div>

            </div>


            <div class="container-fluid py-5 text-left">
                <h3>RECOMENDACIONES</h3>
            </div>

            <!-- Primera Imagen con Texto -->
            <div class="row align-items-center">
                <div class="col-md-6 img1">
                    <img src="assets/img/portfolio/home/1.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                        alt="Los Juegos del hambre">
                </div>
                <div class="col-md-6">
                    <p class="mt-2 letra20 text-center text-white text-bold">Título</p>
                    <p class="mt-2 letra14 text-center text-white">
                        dolor sit amet, consectetur adipiscing elit. Nullam eu leo
                        dignissim, rutrum ante sagittis, hendrerit lorem. Phasellus
                        sed pellentesque augue. Nunc iaculis tellus eget velit dapibus
                        suscipit. Nam eget vestibulum libero, ut consequat tortor.
                        Morbi convallis mattis tortor, eu scelerisque nisl rutrum a.
                        Nullam molestie nisi id suscipit gravida. Quisque pulvinar
                        sapien vitae faucibus porta. Nullam sit amet luctus eros. Duis
                        vehicula mollis vestibulum. Nullam tristique magna nec
                        accumsan sodales. Curabitur tellus est, luctus at sapien eget,
                        venenatis tincidunt lacus. Sed non erat gravida, consequat
                        nibh dignissim, vehicula nulla. Mauris purus diam, pharetra id
                        risus eu, pulvinar lobortis neque. Vivamus facilisis et quam
                        et elementum.
                    </p>
                </div>
                <!--CF2: Estos col deberían apilarse en móvil, hay que usar la clase col-md-->
                <div class="row">
                    <div class="col">
                        <img src="assets/img/portfolio/home/11.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Vive Muere Repite">
                    </div>
                    <div class="col">
                        <img src="assets/img/portfolio/home/6.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Stars Wars">
                    </div>
                    <div class="col">
                        <img src="assets/img/portfolio/home/7.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Hermosa Juventud">
                    </div>
                    <div class="col">
                        <img src="assets/img/portfolio/home/8.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Malefica">
                    </div>
                    <div class="col">
                        <img src="assets/img/portfolio/home/9.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Dos Madres Perfectas">
                    </div>
                    <div class="col">
                        <img src="assets/img/portfolio/home/10.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Amor sin control">
                    </div>
                </div>

                <!--CF2: Esto no debe ser un container-fluid, sino un row con un col dentro-->
                <!--CF2: Estaría justificado el uso del elemento semántico section-->
                <div class="container-fluid py-4 text-left">
                    <h3>PELICULAS</h3>
                </div>

                <!-- Segunda Imagen con Texto -->
                <div class="row align-items-center">
                    <div class="col-md img1">
                        <img src="assets/img/portfolio/home/2.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                            alt="Black Friday">
                    </div>
                    <!--Para los contenidos debes usar el elemento semántico <article>-->
                    <div class="col-md">
                        <p class="mt-2 letra20 text-center text-white text-bold">Título</p>
                        <p class="mt-2 letra14 text-center text-white">
                            dolor sit amet, consectetur adipiscing elit. Nullam eu leo
                            dignissim, rutrum ante sagittis, hendrerit lorem. Phasellus
                            sed pellentesque augue. Nunc iaculis tellus eget velit dapibus
                            suscipit. Nam eget vestibulum libero, ut consequat tortor.
                            Morbi convallis mattis tortor, eu scelerisque nisl rutrum a.
                            Nullam molestie nisi id suscipit gravida. Quisque pulvinar
                            sapien vitae faucibus porta. Nullam sit amet luctus eros. Duis
                            vehicula mollis vestibulum. Nullam tristique magna nec
                            accumsan sodales. Curabitur tellus est, luctus at sapien eget,
                            venenatis tincidunt lacus. Sed non erat gravida, consequat
                            nibh dignissim, vehicula nulla. Mauris purus diam, pharetra id
                            risus eu, pulvinar lobortis neque. Vivamus facilisis et quam
                            et elementum.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="assets/img/portfolio/home/12.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="Pelicula 1">
                        </div>
                        <div class="col">
                            <img src="assets/img/portfolio/home/13.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="Men">
                        </div>
                        <div class="col">
                            <img src="assets/img/portfolio/home/14.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="her">
                        </div>
                        <div class="col">
                            <img src="assets/img/portfolio/home/15.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="El medallon perdido">
                        </div>
                        <div class="col">
                            <img src="assets/img/portfolio/home/16.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="Al Hacker el dia">
                        </div>
                        <div class="col">
                            <img src="assets/img/portfolio/home/17.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="Solo Para Dos">
                        </div>
                    </div>
                    <div class="container-fluid py-4 text-left">
                        <h3>SERIES</h3>
                    </div>

                    <!-- Tercera Imagen con Texto -->
                    <div class="row align-items-center">
                        <div class="col-md img1">
                            <img src="assets/img/portfolio/home/5.jpg" class="img-fluid img-thumbnail d-block mx-auto"
                                alt="Napoleon">
                        </div>
                        <div class="col-md">
                            <p class="mt-2 letra20 text-center text-white text-bold">Título</p>
                            <p class=" mt-2 letra14 text-center text-white">
                                dolor sit amet, consectetur adipiscing elit. Nullam eu leo
                                dignissim, rutrum ante sagittis, hendrerit lorem. Phasellus
                                sed pellentesque augue. Nunc iaculis tellus eget velit dapibus
                                suscipit. Nam eget vestibulum libero, ut consequat tortor.
                                Morbi convallis mattis tortor, eu scelerisque nisl rutrum a.
                                Nullam molestie nisi id suscipit gravida. Quisque pulvinar
                                sapien vitae faucibus porta. Nullam sit amet luctus eros. Duis
                                vehicula mollis vestibulum. Nullam tristique magna nec
                                accumsan sodales. Curabitur tellus est, luctus at sapien eget,
                                venenatis tincidunt lacus. Sed non erat gravida, consequat
                                nibh dignissim, vehicula nulla. Mauris purus diam, pharetra id
                                risus eu, pulvinar lobortis neque. Vivamus facilisis et quam
                                et elementum.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="assets/img/portfolio/home/18.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="Robocop">
                            </div>
                            <div class="col">
                                <img src="assets/img/portfolio/home/19.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="Cuando Todo Esta Perdido">
                            </div>
                            <div class="col">
                                <img src="assets/img/portfolio/home/20.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="Crepusculo">
                            </div>
                            <div class="col">
                                <img src="assets/img/portfolio/home/21.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="Pelicula 2">
                            </div>
                            <div class="col">
                                <img src="assets/img/portfolio/home/22.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="La plegaria punk">
                            </div>
                            <div class="col">
                                <img src="assets/img/portfolio/home/23.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="Happy Family">
                            </div>
                        </div>

                        <div class="container-fluid py-4 text-left">
                            <h3>ANIMES</h3>
                        </div>

                        <!-- Cuarta Imagen con Texto -->
                        <div class="row align-items-center">

                            <div class="col-md img1">
                                <img src="assets/img/portfolio/home/4.jpg"
                                    class="img-fluid img-thumbnail d-block mx-auto" alt="Wish">
                            </div>
                            <div class="col-md">
                                <p class="mt-2 letra20 text-center text-white text-bold">Título</p>
                                <p class="mt-2 letra14 text-center text-white">
                                    dolor sit amet, consectetur adipiscing elit. Nullam eu leo
                                    dignissim, rutrum ante sagittis, hendrerit lorem. Phasellus
                                    sed pellentesque augue. Nunc iaculis tellus eget velit dapibus
                                    suscipit. Nam eget vestibulum libero, ut consequat tortor.
                                    Morbi convallis mattis tortor, eu scelerisque nisl rutrum a.
                                    Nullam molestie nisi id suscipit gravida. Quisque pulvinar
                                    sapien vitae faucibus porta. Nullam sit amet luctus eros. Duis
                                    vehicula mollis vestibulum. Nullam tristique magna nec
                                    accumsan sodales. Curabitur tellus est, luctus at sapien eget,
                                    venenatis tincidunt lacus. Sed non erat gravida, consequat
                                    nibh dignissim, vehicula nulla. Mauris purus diam, pharetra id
                                    risus eu, pulvinar lobortis neque. Vivamus facilisis et quam
                                    et elementum.
                                </p>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <img src="assets/img/portfolio/home/15.jpg"
                                        class="img-fluid img-thumbnail d-block mx-auto" alt="El medallon">
                                </div>
                                <div class="col">
                                    <img src="assets/img/portfolio/home/20.jpg"
                                        class="img-fluid img-thumbnail d-block mx-auto" alt="Tiniebla">
                                </div>
                                <div class="col">
                                    <img src="assets/img/portfolio/home/7.jpg"
                                        class="img-fluid img-thumbnail d-block mx-auto" alt="Juventud">
                                </div>
                                <div class="col">
                                    <img src="assets/img/portfolio/home/12.jpg"
                                        class="img-fluid img-thumbnail d-block mx-auto" alt="Pelicula 5">
                                </div>
                                <div class="col">
                                    <img src="assets/img/portfolio/home/6.jpg"
                                        class="img-fluid img-thumbnail d-block mx-auto" alt="Guerra de estrellas">
                                </div>
                                <div class="col">
                                    <img src="assets/img/portfolio/home/10.jpg"
                                        class="img-fluid img-thumbnail d-block mx-auto" alt="without control">
                                </div>
                            </div>

        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>