<?php

$companyName = "TuningSite";
$title = "De Tuner voor jou Auto!";
$description = "Welkom bij $companyName, de tuner dat jou auto onderhanden neemt om het zo goed na wens te optimaliseren.";

?>

<!DOCTYPE html>
<html lang="en">

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

<body style="background-color: #212529">
    <div class="jumbotron jumbotron2 jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 h1Class">Merken</h1>
            <p class="lead pClass">Kies hier uw merk:</p>
        </div>
    </div>

<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="linkDecorationNone">Home</a></li>
            <li class="breadcrumb-item active inactiveLink" aria-current="page"><a href="#" class="linkDecorationNoneWhite">Merken</a></li>
        </ol>
    </nav>

    <!-- Rij 1 -->
    <div class="row" style="margin-top:75px; margin-bottom: 75px;">
        <div class="col">
            <a href="brands/Audi/audi_overview.php" class="linkDecorationNone">
                <div class="blockBrand">
                    <h6>Audi</h6>
                    <img class="tinyImages100 imgHolder15" src="img/tiny/audi.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="brands/BMW/bmw_overview.php" class="linkDecorationNone">
                <div class="blockBrand">
                    <h6>BMW</h6>
                    <img class="tinyImages62" src="img/tiny/bmw.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="linkDecorationNone" style="pointer-events: none;">
                <div class="blockBrand">
                    <h6>Mercedes <br/>(W.I.P.)</h6>
                    <img class="tinyImages62 imageGreyScale" src="img/tiny/mercedes.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="linkDecorationNone" style="pointer-events: none;">
                <div class="blockBrand">
                    <h6>Porsche <br/>(W.I.P.)</h6>
                    <img class="tinyImages50 imageGreyScale" src="img/tiny/porsche.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="linkDecorationNone" style="pointer-events: none;">
                <div class="blockBrand">
                    <h6>Seat <br/>(W.I.P.)</h6>
                    <img class="tinyImages62 imageGreyScale" src="img/tiny/seat.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="linkDecorationNone" style="pointer-events: none;">
                <div class="blockBrand">
                    <h6>Skoda <br/>(W.I.P.)</h6>
                    <img class="tinyImages62 imageGreyScale" src="img/tiny/skoda.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="linkDecorationNone" style="pointer-events: none;">
                <div class="blockBrand">
                    <h6>Toyota <br/>(W.I.P.)</h6>
                    <img class="tinyImages75 imageGreyScale" src="img/tiny/toyota.png">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="#" class="linkDecorationNone" style="pointer-events: none;">
                <div class="blockBrand">
                    <h6>Volkswagen <br/>(W.I.P.)</h6>
                    <img class="tinyImages62 imageGreyScale" src="img/tiny/volkswagen.png">
                </div>
            </a>
        </div>
    </div>
    <!-- Rij 1 -->

    

</div>

</body>
<?php
    include 'functions/footer.php';
    FooterIndex();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
