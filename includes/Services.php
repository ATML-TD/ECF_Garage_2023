<section class="flux">
    <div class="container">
        <h2 class="title mt-5 pt-4 mb-5">Liste des prestations</h2>
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-5">
                <h3 class="title">
                    <i class="fas fa-oil-can me-3"></i>
                    Vidange
                </h3>
                <ul>
                    <?php
                    ini_set('display_errors', 'on');
                    error_reporting(E_ALL);
                    include('includes/Config.php');
                    $sql = "SELECT tabservices.services_type, tabservices.services_details FROM tabservices WHERE services_type='Vidange'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>
                            <li><?php echo htmlentities($result->services_details); ?></li>

                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 mb-5">
                <h3 class="title">
                    <i class="fas fa-car-battery me-3"></i>
                    Batterie
                </h3>
                <ul>
                    <?php
                    ini_set('display_errors', 'on');
                    error_reporting(E_ALL);
                    include('includes/Config.php');
                    $sql = "SELECT tabservices.services_type, tabservices.services_details FROM tabservices WHERE services_type='Batterie'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>
                            <li><?php echo htmlentities($result->services_details); ?></li>

                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 mb-5">
                <h3 class="title">
                    <i class="fas fa-gauge-simple me-3"></i>
                    Moteur
                </h3>
                <ul>
                    <?php
                    ini_set('display_errors', 'on');
                    error_reporting(E_ALL);
                    include('includes/Config.php');
                    $sql = "SELECT tabservices.services_type, tabservices.services_details FROM tabservices WHERE services_type='Moteur'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>
                            <li><?php echo htmlentities($result->services_details); ?></li>

                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 mb-5">
                <h3 class="title">
                    <i class="fas fa-truck-monster me-3"></i>
                    Pneus
                </h3>
                <ul>
                    <?php
                    ini_set('display_errors', 'on');
                    error_reporting(E_ALL);
                    include('includes/Config.php');
                    $sql = "SELECT tabservices.services_type, tabservices.services_details FROM tabservices WHERE services_type='Pneus'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>
                            <li><?php echo htmlentities($result->services_details); ?></li>

                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 mb-5">
                <h3 class="title">
                    <i class="fas fa-spray-can-sparkles me-3"></i>
                    Carrosserie
                </h3>
                <ul>
                    <?php
                    ini_set('display_errors', 'on');
                    error_reporting(E_ALL);
                    include('includes/Config.php');
                    $sql = "SELECT tabservices.services_type, tabservices.services_details FROM tabservices WHERE services_type='Carrosserie'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) { ?>
                            <li><?php echo htmlentities($result->services_details); ?></li>
                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</section>