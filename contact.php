<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
        <section class="page-section contact d-flex align-items-center" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-7">
                        <div class="text-center my-5 py-5">
                            <h2 class="page-section-heading display-2 text-white mb-0 ">
                                CONTACTO</h2>
                            <p>Mándanos tu feedback</p>
                        </div>
                        <div class="text-center"><!--diferentes divs para los datos de contacto -->
                            <h5>USUARIO</h5>
                            <form id="contactForm">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" />
                                </div>
                                <h5>CORREO</h5>
                                <div class="form-floating mb-3">
                                    <input class="form-control" />
                                </div>
                                <h5>TEMA A TRATAR</h5>
                                <div class="form-floating mb-3">
                                    <input class="form-control" />
                                </div>
                                <h5>DESCRIBEME TU FEEDBACK</h5>
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