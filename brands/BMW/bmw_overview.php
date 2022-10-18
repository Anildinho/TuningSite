<?php

$brand = "BMW";
$companyName = "TuningSite";
$title = "De Tuner voor jou Auto!";
$description = "Zie hier het overzicht van $brand";

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
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/footer.css">
</head>
<?php
    include '../../functions/header.php';
    headerOverview();
?>
<body style="background-color: #212529">

<div class="jumbotron jumbotron2 jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 h1Class">BMW</h1>
        <p class="lead pClass marginBottomLink">Kies hier uw model:</p>
    </div>
</div>


<div class="container" style="margin-bottom: 25px; margin-top: 25px;">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php" class="linkDecorationNone">Home</a></li>
            <li class="breadcrumb-item"><a href="../../brandOverview.php" class="linkDecorationNone">Merken</a></li>
            <li class="breadcrumb-item active inactiveLink" aria-current="page"><a href="#" class="linkDecorationNoneWhite">BMW</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 12rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Serie modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/Series/bmw_1series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">1 Series</p></a>
                    <a href="variants/Series/bmw_2series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">2 Series</p></a>
                    <a href="variants/Series/bmw_3series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">3 Series</p></a>
                    <a href="variants/Series/bmw_4series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">4 Series</p></a>
                    <a href="variants/Series/bmw_5series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">5 Series</p></a>
                    <a href="variants/Series/bmw_6series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">6 Series</p></a>
                    <a href="variants/Series/bmw_7series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">7 Series</p></a>
                    <a href="variants/Series/bmw_8series_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">8 Series</p></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 12rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">X modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/X-modellen/bmw_x1_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X1</p></a>
                    <a href="variants/X-modellen/bmw_x2_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X2</p></a>
                    <a href="variants/X-modellen/bmw_x3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X3</p></a>
                    <a href="variants/X-modellen/bmw_x4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X4</p></a>
                    <a href="variants/X-modellen/bmw_x5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X5</p></a>
                    <a href="variants/X-modellen/bmw_x6_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X6</p></a>
                    <a href="variants/X-modellen/bmw_x7_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">X7</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 12rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Z modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/Z-modellen/bmw_z4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Z4</p></a>

                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                    <a href="#" class="linkDecorationNone inactiveLink">
                        <p class="card-text pClass marginBottomLink" style="color: transparent;">.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 12rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">i modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/I-modellen/bmw_iX_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">iX</p></a>
                    <a href="variants/I-modellen/bmw_iX1_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">iX1</p></a>
                    <a href="variants/I-modellen/bmw_i3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">i3</p></a>
                    <a href="variants/I-modellen/bmw_iX3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">iX3</p></a>
                    <a href="variants/I-modellen/bmw_i4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">i4</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink"><p class="card-text pClass marginBottomLink" style="color: transparent;">.</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink"><p class="card-text pClass marginBottomLink" style="color: transparent;">.</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink"><p class="card-text pClass marginBottomLink" style="color: transparent;">.</p></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 12rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">M modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/M-modellen/bmw_m2_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">M2</p></a>
                    <a href="variants/M-modellen/bmw_m3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">M3</p></a>
                    <a href="variants/M-modellen/bmw_m4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">M4</p></a>
                    <a href="variants/M-modellen/bmw_m5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">M5</p></a>
                    <a href="variants/M-modellen/bmw_m8_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">M8</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink"><p class="card-text pClass marginBottomLink" style="color: transparent;">.</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink"><p class="card-text pClass marginBottomLink" style="color: transparent;">.</p></a>
                    <a href="#" class="linkDecorationNone inactiveLink"><p class="card-text pClass marginBottomLink" style="color: transparent;">.</p></a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php
    include '../../functions/footer.php';
    FooterIndex();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
