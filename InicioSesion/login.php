<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("../includes/navigation.php"); ?>
    <main>
        <section class="page-section" id=" inicioSesion">
            <div class="container-fluid my-5">
                <div class="col-md-6 mx-auto">
                    <div class="container">
                        <div class="row">
                            <div class="text-center inicioSesion-header">
                                <h1>INICIAR SESION</h1>
                            </div>

                            <div class="inicioSesion">

                                <div class="col-md-8 offset-md-2"> <!-- Adjusted size of the column -->
                                    <form>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="email"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll never share your email with
                                                anyone else.</div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section>
    </main>

    <?php include("../includes/footer.php"); ?>

</body>

</html>