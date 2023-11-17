<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
        <section class="page-section inicioSesion d-flex align-items-center" id="inicioSesion">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-7">
                        <div class="text-center my-5 letraInicioSesion">
                            <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-white">
                                AYUDA</h2>
                            <p>mándanos tu feedback</p>
                        </div>
                        <div class="text-center"> <!-- Added text-center class here -->
                            <h5 class="text-white">USUARIO</h5>
                            <form id="contactForm">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" />
                                </div>
                                <h5 class="text-white">CORREO</h5>
                                <div class="form-floating mb-3">
                                    <input class="form-control" />
                                </div>
                                <h5 class="text-white">TEMA A TRATAR</h5>
                                <div class="form-floating mb-3">
                                    <input class="form-control" />
                                </div>
                                <h5 class="text-white">DESCRIBEME TU FEEDBACK</h5>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text"></textarea>
                                </div>
                                <button class="btn btn-primary btn-xl disabled" id="submitButton"
                                    type="submit">ENVIAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>

</body>

</html>