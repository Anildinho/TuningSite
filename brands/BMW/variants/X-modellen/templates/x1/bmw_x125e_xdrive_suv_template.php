<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to TuningSite!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../../../css/index.css">
    <link rel="stylesheet" href="../../../../../../css/footer.css">
</head>
<?php
include '../../../../../../functions/header.php';
headerTemplate();
?>
<body style="background-color: #212529">

<div class="jumbotron jumbotronTemplate jumbotron-fluid jumbotronx1">
    <div class="container">
        <h1 class="display-4 h1Class">BMW X1 xDrive 25e SUV </h1>
        <p class="lead pClass">Bekijk hier de overzicht:</p>
    </div>
</div>

<div class="container" style="margin-bottom: 25px;">
    <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../../../../../index.php" class="linkDecorationNone">Home</a></li>
            <li class="breadcrumb-item"><a href="../../../../../../brandOverview.php" class="linkDecorationNone">Merken</a></li>
            <li class="breadcrumb-item"><a href="../../../../../../brands/BMW/bmw_overview.php" class="linkDecorationNone">BMW</a></li>
            <li class="breadcrumb-item"><a href="../../../../../../brands/BMW/variants/X-modellen/bmw_x1_variants_overview.php" class="linkDecorationNone">X1</a></li>
            <li class="breadcrumb-item active inactiveLink" aria-current="page"><a href="#" class="linkDecorationNoneWhite">X1 xDrive 25e SUV</a></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/front.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/side.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/back.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="width: 22rem; background-color: #2c3237">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Specs</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="card-text pClass marginBottomLink">Merk:</p>
                            <p class="card-text pClass marginBottomLink">Model:</p>
                            <p class="card-text pClass marginBottomLink">Carrosserie:</p>
                            <p class="card-text pClass marginBottomLink">Bouwjaar:</p>
                            <p class="card-text pClass marginBottomLink">Vermogen:</p>
                            <p class="card-text pClass marginBottomLink">Trekkracht:</p>
                            <p class="card-text pClass marginBottomLink">Motor inhoud:</p>
                            <p class="card-text pClass marginBottomLink">Cilinders:</p>
                            <p class="card-text pClass marginBottomLink">Brandstof:</p>
                            <p class="card-text pClass marginBottomLink">Transmissie:</p>
                            <p class="card-text pClass marginBottomLink">Aantal deuren:</p>
                            <p class="card-text pClass marginBottomLink">Top snelheid:</p>
                            <p class="card-text pClass marginBottomLink">Acceleratie 0-100:</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="card-text pClass marginBottomLink">BMW</p>
                            <p class="card-text pClass marginBottomLink">X1 xDrive 25e</p>
                            <p class="card-text pClass marginBottomLink">SUV</p>
                            <p class="card-text pClass marginBottomLink">2021</p>
                            <p class="card-text pClass marginBottomLink">220 pk</p>
                            <p class="card-text pClass marginBottomLink">385 nm</p>
                            <p class="card-text pClass marginBottomLink">1.499cm3</p>
                            <p class="card-text pClass marginBottomLink">3 cilinders</p>
                            <p class="card-text pClass marginBottomLink">Hybride</p>
                            <p class="card-text pClass marginBottomLink">Automaat</p>
                            <p class="card-text pClass marginBottomLink">4/5 deuren</p>
                            <p class="card-text pClass marginBottomLink">193 km/u</p>
                            <p class="card-text pClass marginBottomLink">6.9 sec</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8"><table class="table table-dark table-striped">
                <thead>
                <tr>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <th scope="col">Meer info</th>
                        </div>
                        <div class="col-md-3">
                            <th scope="col">Origineel</th>
                        </div>
                        <div class="col-md-3">
                            <th scope="col">Na Tuning</th>
                        </div>
                        <div class="col-md-3">
                            <th scope="col">Verschil</th>
                        </div>
                    </div>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <th scope="row">Vermogen</th>
                        </div>
                        <div class="col-md-3">
                            <td>220 pk</td>
                        </div>
                        <div class="col-md-3">
                            <td>??????</td>
                        </div>
                        <div class="col-md-3">
                            <td>??????</td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <th scope="row">Koppel</th>
                        </div>
                        <div class="col-md-3">
                            <td>385 nm</td>
                        </div>
                        <div class="col-md-3">
                            <td>??????</td>
                        </div>
                        <div class="col-md-3">
                            <td>??????</td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <th scope="row">Acceleratie</th>
                        </div>
                        <div class="col-md-3">
                            <td>6.9 sec</td>
                        </div>
                        <div class="col-md-3">
                            <td>??????</td>
                        </div>
                        <div class="col-md-3">
                            <td>??????</td>
                        </div>
                    </div>
                </tr>
                <tr>
                    <div class="col-md-12">
                        <div class="col-md-4"><td></td></div>
                        <div class="col-md-4"><td></td></div>
                        <div class="col-md-2">
                            <td>
                                <h6 class="h5Class" style="padding-top: 5px;">Prijs inclusief BTW</h6>
                            </td>
                        </div>
                        <div class="col-md-2">
                            <td>
                                <h5>??????</h5>
                            </td>
                        </div>
                    </div>
                </tr>
                </tbody>
            </table>
            <div class="container">
                <div class="row">
                    <p class="pClass textCenter">De aangeboven tuning-packages zijn niet compatible met E85 brandstof</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 25rem; background-color: #2c3237;">
                <div class="card-header" style="background-color: #212529">
                    <h5 class="card-title h5Class" style="font-weight: bold;">Belangrijke info</h5>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p class="pClass">
                            Hier komt belangrijke info over het tunen van de wagen etc.
                            Hier komt belangrijke info over het tunen van de wagen etc.
                            Hier komt belangrijke info over het tunen van de wagen etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php
include '../../../../../../functions/footer.php';
FooterIndex();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</html>
