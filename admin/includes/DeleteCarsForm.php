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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-3.7.0.js"></script>
    <script src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>


    <div class="container mt-5">
        <div class="navbar">
			<a class="homepage" href="../index.php"><i class="fa fa-fw fa-home"></i> Retour</a>
		</div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-6">
                <h1 class="title">Supprimer des véhicules</h1>
                <table class="table table-striped table-hover text-paragraph">
                    <tr>
                        <th>ID</th>
                        <th>Nom du véhicule</th>
                        <th>Modifier</th>
                    </tr>

                    <?php
                    include('../../includes/Config.php');
                    $sql = "SELECT tabcars.CarsName, tabcars.id from tabcars";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {                ?>
                            <tr>
                                <td><?php echo htmlentities($cnt); ?></td>
                                <td><?php echo htmlentities($result->CarsName); ?></td>
                                <td>
                                    <a class="btn btn-danger my-3" href="DeleteCars.php?delete=<?php echo $result->id;?>" onclick="return confirm('Etes-vous certain de vouloir supprimer?');">Supprimer</a>
                                </td>
                            </tr>
                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>