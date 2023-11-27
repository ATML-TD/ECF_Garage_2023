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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-3.7.0.js"></script>
    <script src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>


<body>
    <div class="container flux">
        <div class="navbar">
            <a class="home" href="../index.php"><i class="fa fa-fw fa-home"></i> Retour</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="title">Modifier les horaires</h2>
                <div class="row">
                    <div class="col-md-12">
                        <form action="EditOpening.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="opening_week" class="col-sm-2 control-label mb-3">En semaine<span style="color:red">*</span></label>
                                <div class="col-sm-4 mb-3">
                                    <input type="text" id="opening_week" name="opening_week" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="opening_saturday" class="col-sm-2 control-label mb-3">Samedi<span style="color:red">*</span></label>
                                <div class="col-sm-4 mb-3">
                                    <input type="text" id="opening_saturday" name="opening_saturday" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="opening_sunday" class="col-sm-2 control-label mb-3">Dimanche<span style="color:red">*</span></label>
                                <div class="col-sm-4 mb-3">
                                    <input type="text" id="opening_sunday" name="opening_sunday" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-2 mb-3">
                                    <button class="btn btn-default mt-3" type="reset">Annuler</button>
                                    <button class="btn btn-danger mt-3" name="submit_opening_btn" type="submit">Ajouter le service</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>