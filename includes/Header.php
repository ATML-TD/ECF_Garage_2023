<header class="header text-paragraph flux">
    <img class="logo" src="assets/images/logo.jpg" alt="Logo Garage V Parrot">
    <div class="d-flex flex-row">
        <!-- List of tools -->
        <ul class="nav nav-underline justify-content-end text-paragraph">
            <div class="p-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="CarsList.php">Voitures d'occasion</a>
                </li>
            </div>
            <div class="p-2">
                <li class="nav-item">
                    <!-- Button trigger contact form modal -->
                    <a class="nav-link" data-bs-toggle="modal" href="#contactForm">Nous contacter</a>
                    <div class="modal fade" id="contactForm" tabindex="-1" role="dialog" aria-labelledby="contactFormTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="contactFormTitle">Quel est votre message?</h5>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="contactForm" data-toggle="validator" class="shake">
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                <label for="name" class="h4">Nom</label>
                                                <input type="text" class="form-control" id="name" placeholder="Entrez votre nom" required data-error="Merci de remplir tous les champs">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="firstname" class="h4">Prénom</label>
                                                <input type="text" class="form-control" id="firstname" placeholder="Entrez votre prénom" required data-error="Merci de remplir tous les champs">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="email" class="h4">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Entrez votre email" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="number" class="h4">Numéro</label>
                                                <input type="text" class="form-control" id="number" placeholder="Entrez votre email" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="h4 ">Message</label>
                                            <textarea id="message" class="form-control" rows="5" placeholder="Entrez votre message" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Envoyer</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="p-2">
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
                                    <h5 class="modal-title" id="loginFormTitle">Login</h5>
                                </div>
                                <div class="modal-body">
                                    <?php
                                    if (isset($message)) {
                                        echo '<label class="text-danger">' . $message . '</label>';
                                    }
                                    ?>
                                    <form method="post">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" />
                                        <br />
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" />
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
</header>