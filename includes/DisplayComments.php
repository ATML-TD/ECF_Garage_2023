<?php
include("Config.php");
$sql = "SELECT * FROM tabcomment WHERE status=1";
$query = $pdo->prepare($sql);
$query->execute();
$result = $query->fetch();
?>


<section class="flux">
    <h3>Votre avis compte!</h3>
    <!-- Display comments and rating -->

    <table class="table table-striped table-hover">
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

</section>