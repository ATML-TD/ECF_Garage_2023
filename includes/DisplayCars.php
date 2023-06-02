<!-- Page Content -->
<div class="container flux">
    <div class="row">
        <br />
        <h2 class="d-flex justify-content-center">Toutes les voitures d'occasion</h2>

        <div class="col-md-3">
            <div class="list-group">
                <h3>Prix</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">1000 - 65000</p>
                <div id="price_range"></div>
            </div>

        </div>
    </div>
</div>

<?php

require_once 'includes/Config.php';


$sql = 'SELECT * 
            FROM tablevehicles';

$q = $pdo->prepare($sql);
$q->execute();
$results = $q->fetchAll(PDO::FETCH_OBJ);
$cnt = 1;

if ($q->rowCount() > 0) {
    foreach ($results as $result) {
?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <h3><?php echo htmlentities($result->VehiclesTitle); ?></h3>
                        <ul class="list-group lust-group-flush">
                            <li class="list-group-item">
                                <i class="fas fa-euro-sign"></i>
                                <?php echo htmlentities($result->PricePerDay); ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-calendar"></i>
                                <?php echo htmlentities($result->ModelYear); ?>
                            </li>
                            <li class="list-group-item">
                                <i class="fas fa-car"></i>
                                <?php echo htmlentities($result->FuelType); ?>
                            </li>
                        </ul>
                        <a href="CarsOverview.php?id=<?php echo htmlentities($result->id); ?>" class="btn btn-danger">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>

<?php }
} ?>

</div>