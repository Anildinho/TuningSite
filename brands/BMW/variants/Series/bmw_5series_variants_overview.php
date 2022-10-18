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
        <h1 class="display-4 h1Class">BMW</h1>
        <p class="lead pClass marginBottomLink">Kies hier uw brandstoftype:</p>
    </div>
</div>

<div class="container" style="margin-bottom: 25px; margin-top: 25px;">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../../../index.php" class="linkDecorationNone">Home</a></li>
            <li class="breadcrumb-item"><a href="../../../../brandOverview.php" class="linkDecorationNone">Merken</a></li>
            <li class="breadcrumb-item"><a href="../../../../brands/BMW/bmw_overview.php" class="linkDecorationNone">BMW</a></li>
            <li class="breadcrumb-item active inactiveLink" aria-current="page"><a href="#" class="linkDecorationNoneWhite">5 Serie</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 20rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Benzine</h5>
                </div>
                <div class="card-body">
                    <a href="templates/5-series/bmw_520i_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">520i Sedan</p></a>
                    <a href="templates/5-series/bmw_530i_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">530i Sedan</p></a>
                    <a href="templates/5-series/bmw_530i_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">530i xDrive Sedan</p></a>
                    <a href="templates/5-series/bmw_540i_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">540i Sedan</p></a>
                    <a href="templates/5-series/bmw_540i_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">540i xDrive Sedan</p></a>
                    <a href="templates/5-series/bmw_m550i_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">M550i xDrive Sedan</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Diesel</h5>
                </div>
                <div class="card-body">
                    <a href="templates/5-series/bmw_518d_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">518d Sedan</p></a>
                    <a href="templates/5-series/bmw_520d_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">520d Sedan</p></a>
                    <a href="templates/5-series/bmw_520d_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">520d xDrive Sedan</p></a>
                    <a href="templates/5-series/bmw_530d_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">530d Sedan</p></a>
                    <a href="templates/5-series/bmw_530d_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">530d xDrive Sedan</p></a>
                    <a href="templates/5-series/bmw_540d_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">540d xDrive Sedan</p></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 20rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Hybrid</h5>
                </div>
                <div class="card-body">
                    <a href="templates/5-series/bmw_520e_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">520e Sedan</p></a>
                    <a href="templates/5-series/bmw_530e_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">530e Sedan</p></a>
                    <a href="templates/5-series/bmw_530e_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">530e xDrive Sedan</p></a>
                    <a href="templates/5-series/bmw_545e_xdrive_sedan_template.php" class="linkDecorationNone"><p class="card-text pClass marginBottomLink">545e xDrive Sedan</p></a>
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
