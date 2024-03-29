<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand me-2">
            <img class="logo" src="assets/images/logo.jpg" alt="Logo Garage V Parrot">
        </a>
        <!-- List of links -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-paragraph">

            <!-- View cars -->
            <div>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="CarsList.php">Voitures d'occasion</a>
                </li>
            </div>

            <!-- Comments -->
            <div>
                <li class="nav-item">
                    <a class="nav-link" name="addReview" id="addReview" data-bs-toggle="modal" href="#review_modal">Donnez votre avis!</a>
                    <?php include('includes/SubmitCommentsForm.php'); ?>
                </li>
            </div>

            <!-- Contact -->
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
                                    <p class="statusMsg"></p>
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
                                                <input type="text" class="form-control" id="number" placeholder="Entrez votre numéro" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="text-paragraph form-group">
                                            <label for="inputMessage" class="h4  mb-3">Message</label>
                                            <textarea id="inputMessage" class="form-control" rows="5" placeholder="Entrez votre message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <button type="button" class="mt-5 btn btn-danger btn-lg pull-right submitBtn" onclick="submitContactForm()">Envoyer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>

            <!-- Login -->
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
                                    <h5 class="modal-title text-paragraph" id="loginFormTitle">S'identifier</h5>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    if (isset($message)) {
                                        echo '<label class="text-danger">' . $message . '</label>';
                                    }
                                    ?>
                                    <form method="post">
                                        <label>Identifiant</label>
                                        <input type="text" name="username" class="text-paragraph form-control" />
                                        <br />
                                        <label>Mot de passe</label>
                                        <input type="password" name="password" class="text-paragraph form-control" />
                                        <br />
                                        <input type="submit" name="login" class="btn btn-danger" value="S'identifier" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</nav>