<footer class="text-paragraph text-center text-lg-start bg-white text-muted flux mt-5">
    <section class="mt-5">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <!-- Logo -->
                <div class="col-md-4 col-lg-3 col-sm-12 mb-md-0 mb-4">
                    <img class="logo" src="assets/images/logo.jpg" alt="Logo Garage V Parrot">
                </div>

                <!-- Services -->
                <div class="col-md-3 col-lg-2 col-sm-12 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 title">Prestations</h6>
                    <ui class="text-paragraph">
                        <li><a href="index.php" class="nav-link">Réparation auto</a></li>
                        <li><a href="CarsList.php" class="nav-link">Vente de voitures d'occasion</a></li>
                    </ui>
                </div>

                <!-- Opening -->
                <div class="col-md-3 col-lg-3 col-sm-12 mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 title">Horaires</h6>
                    <ui class="text-paragraph">
                        <?php
                        ini_set('display_errors', 'on');
                        error_reporting(E_ALL);
                        include('includes/Config.php');
                        $sql = "SELECT tabopening.opening_week, tabopening.opening_saturday, tabopening.opening_sunday FROM tabopening WHERE id=1";
                        $query = $pdo->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) { ?>
                                <li><?php echo htmlentities($result->opening_week); ?></li>
                                <li><?php echo htmlentities($result->opening_saturday); ?></li>
                                <li><?php echo htmlentities($result->opening_sunday); ?></li>

                        <?php $cnt = $cnt + 1;
                            }
                        } ?>
                    </ui>
                </div>

                <!-- Contact -->
                <div class="col-md-3 col-lg-4 col-sm-12 mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 title">Contact</h6>
                    <p class="text-paragraph"><i class="fas fa-home me-3"></i>12 rue du Préambule, 75012 Paris</p>
                    <p class="text-paragraph"><i class="fas fa-envelope me-3"></i>garage.vparrot@gmail.com</p>
                    <p class="text-paragraph"><i class="fas fa-phone me-3"></i>01 39 21 04 64</p>
                </div>
            </div>
        </div>
    </section>
</footer>