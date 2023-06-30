
<?php
include('includes/Config.php'); //Database Connection


if (isset($_POST["action"])) {
    $query = "SELECT * FROM tabcars WHERE status = '1'";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
    AND CarsPrice BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
    ";
    }

    if (isset($_POST["minimum_km"], $_POST["maximum_km"]) && !empty($_POST["minimum_km"]) && !empty($_POST["maximum_km"])) {
        $query .= "
    AND CarsPrice BETWEEN '" . $_POST["minimum_km"] . "' AND '" . $_POST["maximum_km"] . "'
    ";
    }

    if (isset($_POST["minimum_year"], $_POST["maximum_year"]) && !empty($_POST["minimum_year"]) && !empty($_POST["maximum_year"])) {
        $query .= "
    AND CarsYear BETWEEN '" . $_POST["minimum_year"] . "' AND '" . $_POST["maximum_year"] . "'
    ";
    }
    $statement = $pdo->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
    <div class="col-sm-4 col-lg-3 col-md-3">
        <div class="product-grid">
            <div class="product-content">
                <div class="card" style="width: 20rem;">
                    <img src="admin/assets/images/' . $row['CarsImage1'] . '" class="img-responsive" alt="Image"/>
                    <h3 class="title">' . $row['CarsName'] . '</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-euro-sign"></i>' . $row['CarsPrice'] . '
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-calendar"></i>' . $row['CarsYear'] . '
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-car"></i>' . $row['CarsKM'] . '
                        </li>
                    </ul>
                    <a href="CarsOverview.php?id=' . $row['id'] . '"class="btn btn-danger">Voir détails</a>
                </div>
            </div>
        </div>
    </div>';

    }
    } else {
        $output = '<h3>Pas de véhicules trouvés</h3>';
    }
    echo $output;
} 