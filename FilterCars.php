<?php


require_once ('includes/Config.php');


    
    $statement = $pdo->prepare($query);
    var_dump($statement);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();
    $output = '';
    if ($total_row > 0) {
        foreach ($result as $row) {
            $output .= '
    <div class="col-sm-4 col-lg-3 col-md-3">
        <div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
            <p align="center"><strong><a href="#">' . $row['VehiclesTitle'] . '</a></strong></p>
            <h4 style="text-align:center;" class="text-danger" >' . $row['PricePerDay'] . '</h4>
        </div>

    </div>
    ';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    echo $output;
