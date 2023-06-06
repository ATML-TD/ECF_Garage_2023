<?php
include('includes/Config.php'); //Database Connection


if (isset($_POST["action"])) {
    $query = "
    SELECT * FROM tablevehicles WHERE status = '1'
    ";
    if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
        $query .= "
    AND PricePerDay BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'
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
                    <h3 class="title"><a href="#">' . $row['VehiclesTitle'] . '</a></h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-euro-sign"></i>' . $row['PricePerDay'] . '
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';

    }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
} 