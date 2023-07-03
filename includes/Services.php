<section class="flux">
    <div class="container">
        <h2 class="title">Liste des prestations</h2>
        <div class="col-12 p-2">
            <div class="col-md-6 col-sm-12 mb-4 category">
                <div class="row">
                    <div class="col-auto mb-4">
                        <h3 class="title">
                            <i class="fas fa-oil-can me-3"></i>
                            Vidange
                        </h3>
                        <ul>
                            <?php
                            ini_set('display_errors', 'on');
                            error_reporting(E_ALL);
                            include('includes/Config.php');
                            $sql = "SELECT tabvidange.services from tabvidange";
                            $query = $pdo->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) { ?>
                                    <li><?php echo htmlentities($result->services); ?></li>

                            <?php $cnt = $cnt + 1;
                                }
                            } ?>
                        </ul>
                    </div>
                </div>
</section>