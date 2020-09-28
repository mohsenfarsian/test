<?php
$conn = mysqli_connect("localhost","root","","navbar");
$sqlnavbar = "SELECT * FROM `navbar`";
$querynavbar = mysqli_query($conn,$sqlnavbar);
$sqlsub = "SELECT * FROM `sub`";
$querysub = mysqli_query($conn,$sqlsub);
?>
<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8" />
        <title>منوی دراپ داون CSS</title>

<!--        <link href="assets/style.css" rel="stylesheet" />->>>>->

    </head>
    <body>
        <nav>
            <ul>
                <?php
                while ($resultnavbar = mysqli_fetch_assoc($querynavbar))
                {
                ?>
                <li><a href="#"><?= $resultnavbar['title'] ?></a>
                    <ul>
                        <?php
                        while ($resultsub = mysqli_fetch_assoc($querysub))
                        {
                            زر یزرزربزر
                        ?>
                        <li><a href="#"><?= $resultsub['title'] ?></a></li>
                        <?php } ?>

                    </ul>
                </li>
                <?php } ?>
            </ul>
        </nav>

    </body>
</html>