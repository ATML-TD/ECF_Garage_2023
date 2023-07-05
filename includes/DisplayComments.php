<?php
include("Config.php");
$sql = "SELECT * FROM tabcomment WHERE status=1";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetch();
?>


<section class="flux mb-5">
    <div class="container mb-5">
        <h2 class="title mt-5 mb-5">Votre avis compte!</h2>
        <!-- Display comments and rating -->
        <div class="col-md-6 col-sm-12">
            <table class="table table-striped">
                <tr>
                    <th>Client</th>
                    <th>Commentaire</th>
                    <th>Note</th>
                </tr>

                <?php
                ini_set('display_errors', 'on');
                error_reporting(E_ALL);
                include('includes/Config.php');
                $sql = "SELECT tabcomment.id, tabcomment.usermail, tabcomment.comment, tabcomment.status, tabcomment.userrating from tabcomment where status=1";
                $query = $pdo->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) { ?>
                        <tr>
                            <td><?php echo htmlentities($result->usermail); ?></td>
                            <td><?php echo htmlentities($result->comment); ?></td>
                            <td>
                                <?php
                                $stars = $result->userrating;
                                $starhtml = '<i class="fa-regular fa-star" style="color: #f6d32d;"></i>';
                                echo str_repeat($starhtml, $stars);

                                ?>
                            </td>
                        </tr>
                <?php $cnt = $cnt + 1;
                    }
                } ?>
            </table>
        </div>
    </div>
</section>