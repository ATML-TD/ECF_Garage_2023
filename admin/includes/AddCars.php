<?php
session_start();
error_reporting(0);
include('../includes/Config.php');

if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {

	if (isset($_POST['submit'])) {
		$carsname = $_POST['CarsName'];
		$carsprice = $_POST['CarsPrice'];
		$carsyear = $_POST['CarsYear'];
		$carskm = $_POST['CarsKM'];
		$carsdescription = $_POST['CarsDescription'];
		$carsseat = $_POST['CarsSeat'];
		$carstype = $_POST['CarsType'];
		$carsac = $_POST['CarsAC'];
		$bluetooth = $_POST['Bluetooth'];
		$autolight = $_POST['AutoLight'];
		$carsimage1 = $_FILES["CarsImage1"]["name"];
		$carsimage2 = $_FILES["CarsImage2"]["name"];
		$carsimage3 = $_FILES["CarsImage3"]["name"];
		$carsimage4 = $_FILES["CarsImage4"]["name"];

		move_uploaded_file($_FILES["CarsImage1"]["tmp_name"], "assets/images/" . $_FILES["CarsImage1"]["name"]);
		move_uploaded_file($_FILES["CarsImage2"]["tmp_name"], "assets/images/" . $_FILES["CarsImage2"]["name"]);
		move_uploaded_file($_FILES["CarsImage3"]["tmp_name"], "assets/images/" . $_FILES["CarsImage3"]["name"]);
		move_uploaded_file($_FILES["CarsImage4"]["tmp_name"], "assets/images/" . $_FILES["CarsImage4"]["name"]);

		$sql = "INSERT INTO tabcars(CarsName,CarsPrice,CarsYear,CarsKM,CarsDescription,CarsSeat,CarsType,CarsAC,Bluetooth,AutoLight,CarsImage1,CarsImage2,CarsImage3,CarsImage4) VALUES(:carsname,:carsprice,:carsyear,:carskm,:carsdescription,:carsseat,:carstype,:carsac,:bluetooth,:autoLight,:carsimage1,:carsimage2,:carsimage3,:carsimage4)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':carsname', $carsname, PDO::PARAM_STR);
		$query->bindParam(':carsprice', $carsprice, PDO::PARAM_STR);
		$query->bindParam(':carsyear', $carsyear, PDO::PARAM_STR);
		$query->bindParam(':carskm', $carskm, PDO::PARAM_STR);
		$query->bindParam(':carsdescription', $carsdescription, PDO::PARAM_STR);
		$query->bindParam(':carsseat', $carsseat, PDO::PARAM_STR);
		$query->bindParam(':carstype', $carstype, PDO::PARAM_STR);
		$query->bindParam(':carsac', $carsac, PDO::PARAM_STR);
		$query->bindParam(':bluetooth', $bluetooth, PDO::PARAM_STR);
		$query->bindParam(':autolight', $autolight, PDO::PARAM_STR);
		$query->bindParam(':carsimage1', $carsimage1, PDO::PARAM_STR);
		$query->bindParam(':carsimage2', $carsimage2, PDO::PARAM_STR);
		$query->bindParam(':carsimage3', $carsimage3, PDO::PARAM_STR);
		$query->bindParam(':carsimage4', $vimcarsimage4age4, PDO::PARAM_STR);

		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		if ($lastInsertId) {
			$msg = "Voiture ajoutée";
		} else {
			$error = "Un problème est survenu";
		}
	}


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
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-3.7.0.js"></script>
		<script src="//code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	</head>

	<body>

		<div class="navbar">
			<a class="homepage" href="../index.php"><i class="fa fa-fw fa-home"></i> Retour au site</a>
			<a href="includes/Logout.php"><i class="fa fa-fw fa-user"></i> Se déconnecter</a>
		</div>

		<div class="sidenav">
			<div class="dropdown">
				<button class="dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-car"></i> Gérer les voitures
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="includes/AddCars.php">Ajouter</a>
					<a class="dropdown-item" href="#">Supprimer</a>
				</div>
			</div>


			<a href="#"><i class="fa fa-pen"></i> Validation commentaires</a>
			<a href="#"><i class="fa fa-table"></i> Modifier les horaires</a>
			<a href="#"><i class="fa fa-user"></i> Ajouter des employés</a>
		</div>

		<div class=main>
			<div class="ts-main-content">
				<div class="content-wrapper">
					<div class="container-fluid">

						<div class="row">
							<div class="col-md-12">

								<h2 class="page-title">Ajouter une voiture</h2>

								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-default">

											<div class="panel-body">
												<form method="post" class="form-horizontal" enctype="multipart/form-data">
													<div class="form-group">
														<label class="col-sm-2 control-label">Nom du véhicule<span style="color:red">*</span></label>
														<div class="col-sm-4">
															<input type="text" name="carsname" class="form-control" required>
														</div>
														<label class="col-sm-2 control-label">Prix du véhicule<span style="color:red">*</span></label>
														<div class="col-sm-4">
															<input type="text" name="carsprice" class="form-control" required>
														</div>
														<label class="col-sm-2 control-label">Année du véhicule<span style="color:red">*</span></label>
														<div class="col-sm-4">
															<input type="text" name="carsyear" class="form-control" required>
														</div>
														<label class="col-sm-2 control-label">Kilométrage du véhicule<span style="color:red">*</span></label>
														<div class="col-sm-4">
															<input type="text" name="carskm" class="form-control" required>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label">Détails du véhicule<span style="color:red">*</span></label>
															<div class="col-sm-10">
																<textarea class="form-control" name="carsdescription" rows="3" required></textarea>
															</div>
														</div>
														<label class="col-sm-2 control-label">Nombre de sièges<span style="color:red">*</span></label>
														<div class="col-sm-4">
															<input type="text" name="carsseat" class="form-control" required>
														</div>
														<div class="form-group">
															<label class="col-sm-2 control-label">Type de véhicule<span style="color:red">*</span></label>
															<div class="col-sm-4">
																<select class="selectpicker" name="carstype" required>
																	<option value=""> Selectionner </option>
																	<option value="Essence">Essence</option>
																	<option value="Electrique">Electrique</option>
																	<option value="Hybride">Hybride</option>
																</select>
															</div>
														</div>

														<div class="form-group">
															<div class="col-sm-12">
																<h4><b>Ajouter des images</b></h4>
															</div>
														</div>


														<div class="form-group">
															<div class="col-sm-4">
																Image 1 <span style="color:red">*</span><input type="file" name="carsimage1" required>
															</div>
															<div class="col-sm-4">
																Image 2<span style="color:red">*</span><input type="file" name="carsimage2" required>
															</div>
															<div class="col-sm-4">
																Image 3<span style="color:red">*</span><input type="file" name="carsimage3" required>
															</div>
															<div class="col-sm-4">
																Image 4<span style="color:red">*</span><input type="file" name="carsimage4" required>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-md-12">
															<div class="panel panel-default">
																<div class="panel-heading">Accessoires</div>
																<div class="panel-body">


																	<div class="form-group">
																		<div class="col-sm-3">
																			<div class="checkbox checkbox-inline">
																				<input type="checkbox" id="climatisation" name="carsac" value="1">
																				<label for="climatisation"> Climatisation </label>
																			</div>
																		</div>
																		<div class="col-sm-3">
																			<div class="checkbox checkbox-inline">
																				<input type="checkbox" id="bluetooth" name="bluetooth" value="1">
																				<label for="bluetooth"> Bluetooth </label>
																			</div>
																		</div>
																		<div class="col-sm-3">
																			<div class="checkbox checkbox-inline">
																				<input type="checkbox" id="autolight" name="autolight" value="1">
																				<label for="autolight"> Feux automatique </label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-8 col-sm-offset-2">
															<button class="btn btn-default" type="reset">Annuler</button>
															<button class="btn btn-danger" name="submit" type="submit">Ajouter le véhicule</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>

	</html>
<?php } ?>