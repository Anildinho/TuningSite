<?php

$companyName = "TuningSite";
$title = "De Tuner voor jou Auto!";
$description = "Welkom bij $companyName, de tuner dat jou auto onderhanden neemt om het zo goed na wens te optimaliseren.";

?>

<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>" />
    <meta name="robots" content= "index, follow">
    <title><?= $companyName ?> - <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<?php
    include 'functions/header.php';
    headerIndex();
?>
<body>

<div class="jumbotron jumbotron-fluid jumbotronMainBackground">
    <div class="container">
        <h1 class="display-4 h1Class"><?= $companyName ?></h1>
        <p class="lead pClass">De Tuner voor jou Auto!</p>
    </div>
</div>

<div class="bg-dark text-secondary px-4 py-5 text-center blockMainBackground">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Album</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">Hier kan je zien welke auto's wij allemaal onder handen hebben genomen en hebben verzorgd van vermogen upgrade!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="album/index.php">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3 fw-bold">Ga verder</button>
                </a>
            </div>
        </div>
    </div>
</div>

</body>
<?php
    include 'functions/footer.php';
    FooterIndex();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
