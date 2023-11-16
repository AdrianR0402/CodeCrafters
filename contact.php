<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main>
        <!-- Contact Section-->
        <section class="page-section inicioSesion" id="inicioSesion">
            <div>
                <div class="container-fluid my-5">
                    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">AYUDA</h2>
                    <p>Si necesitas ayuda mandanos un correo</p>
                    <!-- Contact Section Form-->
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-xl-7">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                        data-sb-validations="required" />
                                    <label for="name">Full name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                        data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is
                                        required.
                                    </div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                        data-sb-validations="required" />
                                    <label for="phone">Phone number</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                        required.
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" type="text"
                                        placeholder="Enter your message here..." style="height: 10rem"
                                        data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is
                                        required.
                                    </div>
                                </div>

                                <div class="d-none" id="submitSuccessMessage">
                                </div>
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
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