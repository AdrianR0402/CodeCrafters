<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>

        <section class="page-section subscription" id="subscription">
            <div class="container mt-5">
                <h2 class="text-center mb-4">Opciones de Suscripción</h2>

                <div class="row">
                    <!-- Columna 1 -->
                    <div class="col-md-4">
                        <div class="subscription-option">
                            <h5>Plan Básico</h5>
                            <p>Acceso básico a nuestro contenido.</p>
                            <p><strong>$9.99/mes</strong></p>
                            <a href="#" class="btn btn-primary">Suscribirse</a>
                        </div>
                    </div>

                    <!-- Columna 2 -->
                    <div class="col-md-4">
                        <div class="subscription-option">
                            <h5>Plan Estándar</h5>
                            <p>Acceso a contenido premium y calidad HD.</p>
                            <p><strong>$19.99/mes</strong></p>
                            <a href="#" class="btn btn-primary">Suscribirse</a>
                        </div>
                    </div>

                    <!-- Columna 3 -->
                    <div class="col-md-4">
                        <div class="subscription-option">
                            <h5>Plan Premium</h5>
                            <p>Acceso ilimitado a todas las características y contenido exclusivo.</p>
                            <p><strong>$29.99/mes</strong></p>
                            <a href="#" class="btn btn-primary">Suscribirse</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>