<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand me-2">
            <img class="logo" src="assets/images/logo.jpg" alt="Logo Garage V Parrot">
        </a>

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- List of links -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-paragraph">
                <div>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="CarsList.php">Voitures d'occasion</a>
                    </li>
                </div>

                <div>
                    <li class="nav-item">
                        <a class="nav-link" name="add_review" id="add_review" data-bs-toggle="modal" href="#add_review">Donnez votre avis!</a>
                        <?php include('includes/SubmitCommentsForm.php'); ?>
                    </li>
                </div>

                <div>
                    <li class="nav-item">
                        <!-- Button trigger contact form modal -->
                        <a class="nav-link" data-bs-toggle="modal" href="#contactForm">Nous contacter</a>
                        <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactFormTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-paragraph" id="contactFormTitle">Quel est votre message?</h5>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form" id="contactForm" data-toggle="validator" class="shake">
                                            <div class="row">
                                                <div class="text-paragraph form-group col-sm-6 mb-3">
                                                    <label for="name" class="h4">Nom</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required data-error="Merci de remplir tous les champs">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="text-paragraph form-group col-sm-6 mb-3">
                                                    <label for="firstname" class="h4">Prénom</label>
                                                    <input type="text" class="form-control" id="firstname" placeholder="Entrez votre prénom" required data-error="Merci de remplir tous les champs">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="text-paragraph form-group col-sm-6 mb-3">
                                                    <label for="email" class="h4">Email</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="text-paragraph form-group col-sm-6 mb-3">
                                                    <label for="number" class="h4">Numéro</label>
                                                    <input type="text" class="form-control" id="number" placeholder="Entrez votre email" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="text-paragraph form-group">
                                                <label for="message" class="h4  mb-3">Message</label>
                                                <textarea id="message" class="form-control" rows="5" placeholder="Entrez votre message" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <button type="submit" id="login" class="mt-5 btn btn-danger btn-lg pull-right ">Envoyer</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div>
                    <li class="nav-item">
                        <!-- Button trigger login modal -->
                        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#loginForm">
                            <img src="assets/images/login.svg" alt="Login icon">
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="loginFormTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-paragraph" id="loginFormTitle">Login</h5>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        if (isset($message)) {
                                            echo '<label class="text-danger">' . $message . '</label>';
                                        }
                                        ?>
                                        <form method="post">
                                            <label>Username</label>
                                            <input type="text" name="username" class="text-paragraph form-control" />
                                            <br />
                                            <label>Password</label>
                                            <input type="password" name="password" class="text-paragraph form-control" />
                                            <br />
                                            <input type="submit" name="login" class="btn btn-danger" value="Login" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>