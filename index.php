<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="../alumni/assets/style/style.css" rel="stylesheet">

    <title>Alumni AFPA</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>
    <div class="parallax1">
    <div class="container d-flex flex-wrap flex-row justify-content-evenly">
    <?php
    include('./assets/data/data.php');
    ?>
    <?php foreach ($data as $index => $item) { 
        ?>
    <div class="card m-1" style="width: 18rem;">
        <?php
        $directory = "./assets/img";
        $images = glob($directory . "/portrait-*");

        if ($images[$index]) {
            echo '<img class="card-img-top" src="./assets/img/portrait-'.($index+1).'.jpg" alt="Portrait">';
        }
        ?>
        <div class="card-body">
            <h5 class="card-title"><?= $item['name']; ?></h5>
            <p class="card-text">Téléphone : <?= $item['phone']; ?><br>
                E-mail : <?=  $item['email']; ?><br>
                Region : <?=  $item['region']; ?></p>
        </div>
    </div>
<?php } ?>
    </div>

<div><h1></h1></div>

    </div>

    <div class="parallax2">

    
    </div>
    <?php
include('./components/footer.php');
?>
<style>
    <?php
    include('./assets/style/style.css');
    ?>
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>