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
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-6">
                <h1 class="title">Gérer les commentaires</h1>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Mail utilisateur</th>
                        <th>Commentaire</th>
                        <th>Status</th>
                        <th>Supprimer</th>
                        <th>Ajouter</th>
                    </tr>

                    <?php
                    ini_set('display_errors', 'on');
                    error_reporting(E_ALL);
                    include('../../includes/Config.php');
                    $sql = "SELECT tabcomment.id, tabcomment.usermail, tabcomment.comment, tabcomment.status from tabcomment";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $result) {                ?>
                            <tr>
                                <td><?php echo htmlentities($result->usermail); ?></td>
                                <td><?php echo htmlentities($result->comment); ?></td>
                                <td><?php echo htmlentities($result->status); ?></td>
                                <td>
                                    <a class="btn btn-danger my-3" href="DeleteComments.php?delete=<?php echo $result->id;?>" onclick="return confirm('Etes-vous certain de vouloir supprimer?');">Supprimer</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger my-3" href="AddComments.php?add=<?php echo $result->id;?>" onclick="return confirm('Etes-vous certain de vouloir ajouter?');">Ajouter</a>
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