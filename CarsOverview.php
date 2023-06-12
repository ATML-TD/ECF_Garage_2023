<?php
session_start();
include('includes/Config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V.Parrot</title>
    <link rel="shortcut icon" href="assets/images/icon.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- START header -->
    <?php include('includes/Header.php'); ?>
    <!-- END header -->

    <!--OVERVIEW-->

    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM tabcars WHERE id=:id";
    $query = $pdo->prepare($sql);
    $query->bindParam(':id', $id);
    $query->execute();
    $result = $query->fetch();
    ?>

    <section class=flux>
        <div>
            <img src="assets/images/<?php echo htmlentities($result["CarsImage1"]);?>" class="img-responsive" alt="image" width="900" height="560">
        </div>
        <div>
            <img src="assets/images/<?php echo htmlentities($result["CarsImage2"]);?>" class="img-responsive" alt="image" width="900" height="560">
        </div>
        <div>
            <img src="assets/images/<?php echo htmlentities($result["CarsImage3"]);?>" class="img-responsive" alt="image" width="900" height="560">
        </div>
        <div>
            <img src="assets/images/<?php echo htmlentities($result["CarsImage4"]);?>" class="img-responsive" alt="image" width="900" height="560">
        </div>
        <div>
            <img src="assets/images/<?php echo htmlentities($result["CarsImage5"]);?>" class="img-responsive" alt="image" width="900" height="560">
        </div>
    </section>

    <!-- Car details -->
    <section class="flux">
        <h2><?php echo htmlentities($result["CarsName"]); ?></h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <i class="fas fa-euro-sign"></i>
                    <h5><?php echo htmlentities($result["CarsPrice"]); ?></h5>
                </div>
                <div class="col">
                    <i class="fas fa-calendar"></i>
                    <h5><?php echo htmlentities($result["CarsYear"]); ?></h5>
                </div>
                <div class="col">
                    <i class="fas fa-car"></i>
                    <h5><?php echo htmlentities($result["CarsKM"]); ?></h5>
                </div>
            </div>
        </div>

        <nav class=text-paragraph>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Détails du véhicules</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Acessoires</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p class=text-paragraph><?php echo htmlentities($result["CarsDescription"]); ?></p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Disponible</th>
                        </tr>
                    </thead>
                    <tbody>
                        <th scope="row">Nombre de sièges</th>
                            <td><?php echo($result["CarsSeat"])?></td>
                        </tr>
                        <th scope="row">Type de voiture</th>
                            <td><?php echo($result["CarsType"])?></td>
                        </tr>
                        <tr>
                            <th scope="row">Climatisation</th>
                            <?php if ($result["CarsAC"] == 1) {
                            ?>
                                <td>oui</td>
                            <?php } else { ?>
                                <td>non</td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <th scope="row">Bluetooth</th>
                            <?php if ($result["CDPlayer"] == 1) {
                            ?>
                                <td>oui</td>
                            <?php } else { ?>
                                <td>non</td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <th scope="row">Lumière automatique</th>
                            <?php if ($result["CDPlayer"] == 1) {
                            ?>
                                <td>oui</td>
                            <?php } else { ?>
                                <td>non</td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /Car details -->
    <!--/OVERVIEW-->

    <!-- Footer -->
    <?php include('includes/Footer.php'); ?>
    <!-- Footer -->

    <!--Login-Form -->
    <?php include('includes/Login.php'); ?>
    <!--/Login-Form -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>