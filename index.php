<?php
session_start();
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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-3.7.0.js"></script>
    <script src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


</head>

<body>

    <!-- START header -->

    <!--Login-Form -->
    <?php include('includes/Login.php'); ?>
    <!--/Login-Form -->

    <?php include('includes/Header.php'); ?>
    <!-- END header -->

    <main>
        <!-- Prestations -->
        <?php include('includes/Services.php'); ?>
        <!-- Prestation -->

        <p>TEST</p>
        <div class="modal custom" id="feedbackModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3>Rate your feedback</h3>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <form onsubmit="return saveFeedback(this);">
                            <div class='starrr'></div>

                            <div class="form-group" style="margin-top: 10px;">
                                <input type="text" name="feedback" class="form-control" />
                            </div>

                            <input type="submit" class="btn btn-primary pull-right" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>


    <!-- Footer -->
    <?php include('includes/Footer.php'); ?>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/validator.min.js"></script>
    <script src="assets/js/main.js"></script>




</body>

</html>