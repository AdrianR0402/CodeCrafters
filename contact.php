<?php


?>
<?php require_once 'UsuariosController.php'; ?>
<?php include("includes/a_config.php");
if (($_SESSION["usuario"]) == null) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
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
                            <!-- CF2:¿Dónde está el h1?-->
                            <h2 class="page-section-heading display-2 text-white mb-0 ">
                                CONTACTO</h2>
                            <p id="wave1">Mándanos tu feedback</p>
                        </div>
                        <div class="text-center"><!--diferentes divs para los datos de contacto -->
                            <!-- CF2: ¿Porqué h5? esto tiene que ser un <label>-->

                            <form action="procesarfeedback.php" method="POST" id="contactForm">
                                <h5 id="wave1">TEMA A TRATAR</h5>
                                <div class="form-floating mb-3">
                                    <label for="temaatratar">tema</label>
                                    <input id="temaatratar" class="form-control" name="tema"
                                        alt=" tema de 20 palabras" />
                                </div>
                                <h5 id="wave1">DESCRIBEME TU FEEDBACK</h5>
                                <div class="form-floating mb-3">
                                    <label for="temaatratart">describe
                                    </label>
                                    <textarea id="temaatratart" class="form-control" id="message" name="feed"
                                        type="text" alt="describe el problema en 100 palabras"></textarea>
                                </div>
                                <button class="btn btn-primary btn-xl" id="submitButton" type="submit"
                                    alt="enviar">ENVIAR</button>
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