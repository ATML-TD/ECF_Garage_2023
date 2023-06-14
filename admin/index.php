<?php
session_start();
error_reporting(0);

include("includes/AddCars.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V.Parrot</title>
    <link rel="shortcut icon" href="../assets/images/icon.jpg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header class="admin-header text-paragraph flux">
        <img class="logo" src="../assets/images/logo.jpg" alt="Logo Garage V Parrot">
        <button type="submit" id="logout" class="btn btn-danger btn-lg pull-right ">Deconnexion</button>
    </header>
    <div class="ts-main-content">
        <nav class="ts-sidebar">
            <ul class="ts-sidebar-menu">

                <li><a href="#"><i class="fa fa-car"></i>Voitures d'occasion</a>
                    <ul>
                        <li><a href="AddCars.php">Ajouter une voiture</a></li>
                        <li><a href="manage-vehicles.php">Supprimer une voiture</a></li>
                    </ul>
                </li>

                <li><a href="testimonials.php"><i class="fa fa-table"></i>Validation commentaires</a></li>
                <li><a href="manage-conactusquery.php"><i class="fa fa-desktop"></i>Modifier les horaires</a></li>
                <li><a href="manage-subscribers.php"><i class="fa fa-table"></i>Ajouter des employés</a></li>

            </ul>
        </nav>

    </div>
</body>

</html>