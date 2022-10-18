<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to TuningSite!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../css/index.css">
    <link rel="stylesheet" href="../../../../css/footer.css">
</head>
<?php
include '../../../../functions/header.php';
headerVariants();
?>
<body style="background-color: #212529">
<div class="jumbotron jumbotron2 jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 h1Class">Audi A1</h1>
        <p class="lead pClass marginBottomLink">Kies hier uw uitvoering:</p>
    </div>
</div>

<div class="container" style="margin-bottom: 50px; margin-top: 25px;">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../../../index.php" class="linkDecorationNone">Home</a></li>
            <li class="breadcrumb-item"><a href="../../../../brandOverview.php" class="linkDecorationNone">Merken</a></li>
            <li class="breadcrumb-item"><a href="../../../../brands/Audi/audi_overview.php" class="linkDecorationNone">Audi</a></li>
            <li class="breadcrumb-item active inactiveLink" aria-current="page"><a href="#" class="linkDecorationNoneWhite">A1</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col">
            <div class="card" style="width: 20rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Pro Line</h5>
                </div>
                <div class="card-body">
                    <a href="templates/A1/audi_a1_pl_25_tfsi_5bak.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Pro Line 25 TFSI 5-bak</p></a>
                    <a href="templates/A1/audi_a1_pl_30_tfsi_6bak.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Pro Line 30 TFSI 6-bak</p></a>
                    <a href="templates/A1/audi_a1_pl_25_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Pro Line 25 TFSI S tronic</p></a>
                    <a href="templates/A1/audi_a1_pl_30_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Pro Line 30 TFSI S tronic</p></a>
                    <a href="templates/A1/audi_a1_pl_35_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Pro Line 35 TFSI S tronic</p></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Advance Edition</h5>
                </div>
                <div class="card-body">
                    <a href="templates/A1/audi_a1_ae_25_tfsi_5bak.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Advance Edition 25 TFSI 5-bak</p></a>
                    <a href="templates/A1/audi_a1_ae_30_tfsi_6bak.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Advance Edition 30 TFSI 6-bak</p></a>
                    <a href="templates/A1/audi_a1_ae_25_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Advance Edition 25 TFSI S tronic</p></a>
                    <a href="templates/A1/audi_a1_ae_30_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Advance Edition 30 TFSI S tronic</p></a>
                    <a href="templates/A1/audi_a1_ae_35_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">Advance Edition 35 TFSI S tronic</p></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">S Edition</h5>
                </div>
                <div class="card-body">
                    <a href="templates/A1/audi_a1_se_25_tfsi_5bak.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S Edition 25 TFSI 5-bak</p></a>
                    <a href="templates/A1/audi_a1_se_30_tfsi_6bak.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S Edition 30 TFSI 6-bak</p></a>
                    <a href="templates/A1/audi_a1_se_25_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S Edition 25 TFSI S tronic</p></a>
                    <a href="templates/A1/audi_a1_se_30_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S Edition 30 TFSI S tronic</p></a>
                    <a href="templates/A1/audi_a1_se_35_tfsi_stronic.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">S Edition 35 TFSI S tronic</p></a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php
include '../../../../functions/footer.php';
FooterIndex();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
