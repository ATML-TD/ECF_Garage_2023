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
    <div class="card">
        <div class="card-header">
            <h5><?php echo htmlentities($result["usermail"]); ?></h5>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><?php echo htmlentities($result["comment"]); ?></p>
                    </div>
                    <div class="col" id="displaystars">
                        <script>
                            var html = '';
                            var starrating = "<?php print($result["userrating"]); ?>;"
                            starrating = parseInt(starrating)
                            for (var star = 1; star <= Number(starrating); star++) {
                                console.log(starrating)
                                html += '<i class="fa-regular fa-star" style="color: #f6d32d;"></i>';
                            }
                            document.getElementById("displaystars").innerHTML = html;
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>