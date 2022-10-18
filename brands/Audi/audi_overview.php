<?php

$brand = "Audi";
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
        <h1 class="display-4 h1Class"><?= $brand ?></h1>
        <p class="lead pClass marginBottomLink">Kies hier uw model:</p>
    </div>
</div>


<div class="container" style="margin-bottom: 50px; margin-top: 25px;">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../index.php" class="linkDecorationNone">Home</a></li>
            <li class="breadcrumb-item"><a href="../../brandOverview.php" class="linkDecorationNone">Merken</a></li>
            <li class="breadcrumb-item active inactiveLink" aria-current="page"><a href="#" class="linkDecorationNoneWhite"><?= $brand ?></a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">A-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/A-modellen/audi_a1_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A1</p></a>
                    <a href="variants/A-modellen/audi_a3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A3</p></a>
                    <a href="variants/A-modellen/audi_a4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A4</p></a>
                    <a href="variants/A-modellen/audi_a5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A5</p></a>
                    <a href="variants/A-modellen/audi_a6_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A6</p></a>
                    <a href="variants/A-modellen/audi_a7_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A7</p></a>
                    <a href="variants/A-modellen/audi_a8_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">A8</p></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">S-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/S-modellen/audi_s3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S3</p></a>
                    <a href="variants/S-modellen/audi_s4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S4</p></a>
                    <a href="variants/S-modellen/audi_s5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S5</p></a>
                    <a href="variants/S-modellen/audi_s8_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S8</p></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">RS-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/RS-modellen/audi_rs3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RS3</p></a>
                    <a href="variants/RS-modellen/audi_rs4_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RS4</p></a>
                    <a href="variants/RS-modellen/audi_rs5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RS5</p></a>
                    <a href="variants/RS-modellen/audi_rs6_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RS6</p></a>
                    <a href="variants/RS-modellen/audi_rs7_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RS7</p></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Q-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/Q-modellen/audi_q2_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Q2</p></a>
                    <a href="variants/Q-modellen/audi_q3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Q3</p></a>
                    <a href="variants/Q-modellen/audi_q5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Q5</p></a>
                    <a href="variants/Q-modellen/audi_q7_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Q7</p></a>
                    <a href="variants/Q-modellen/audi_q8_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Q8</p></a>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top: 25px; height: 250px;">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">SQ-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/SQ-modellen/audi_sq2_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">SQ2</p></a>
                    <a href="variants/SQ-modellen/audi_sq5_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">SQ5</p></a>
                    <a href="variants/SQ-modellen/audi_sq7_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">SQ7</p></a>
                    <a href="variants/SQ-modellen/audi_sq8_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">SQ8</p></a>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top: 25px; height: 250px;">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">RSQ-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/RSQ-modellen/audi_rsq3_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RSQ3</p></a>
                    <a href="variants/RSQ-modellen/audi_rsq8_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RSQ8</p></a>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top: 25px;">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">E-Tron-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/Etron-modellen/audi_etron_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">e-tron</p></a>
                    <a href="variants/Etron-modellen/audi_etrons_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">e-tron S</p></a>
                    <a href="variants/Etron-modellen/audi_etrongt_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">e-tron GT quattro</p></a>
                    <a href="variants/Etron-modellen/audi_rsetrongt_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">RS e-tron GT</p></a>
                    <a href="variants/Etron-modellen/audi_q4_etron_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Q4 e-tron</p></a>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top: 25px;">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">TT-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/TT-modellen/audi_tt_coupe_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">TT Coupe</p></a>
                    <a href="variants/TT-modellen/audi_tt_roadster_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">TT Roadster</p></a>
                    <a href="variants/TT-modellen/audi_tts_coupe_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">TT S Coupe</p></a>
                    <a href="variants/TT-modellen/audi_tts_roadster_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">TT S Roadster</p></a>
                    <a href="variants/TT-modellen/audi_ttrs_coupe_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">TT RS Coupe</p></a>
                    <a href="variants/TT-modellen/audi_ttrs_roadster_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">TT RS Roadster</p></a>
                </div>
            </div>
        </div>

        <div class="col" style="margin-top: 25px;">
            <div class="card" style="width: 15rem; background-color: #2c3237; height: 250px;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">R8-modellen</h5>
                </div>
                <div class="card-body">
                    <a href="variants/R8-modellen/audi_r8c_v10p_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">R8 Coupe V10 Performance</p></a>
                    <a href="variants/R8-modellen/audi_r8s_v10p_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">R8 Spyder V10 Performance</p></a>
                    <a href="variants/R8-modellen/audi_r8c_v10rwd_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">R8 Coupe V10 RWD</p></a>
                    <a href="variants/R8-modellen/audi_r8s_v10rwd_variants_overview.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">R8 Spyder V10 RWD</p></a>
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
