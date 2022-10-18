<?php

function headerIndex(){
    echo "
<header>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark navClass'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='index.php' style='font-weight: bold;'>TuningSite</a>
            <button class='navbar-toggler ' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='brandOverview.php'>Merken</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='#'>Inloggen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
}

function headerOverview(){
echo "
<header>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark navClass'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='../../index.php' style='font-weight: bold;'>TuningSite</a>
            <button class='navbar-toggler ' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='../../brandOverview.php'>Merken</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='#'>Inloggen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
}

function headerVariants(){
    echo "
<header>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark navClass'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='../../../../index.php' style='font-weight: bold;'>TuningSite</a>
            <button class='navbar-toggler ' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='../../../../brandOverview.php'>Merken</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='#'>Inloggen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
}

function headerTemplate(){
    echo "
<header>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark navClass'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='../../../../../../index.php' style='font-weight: bold;'>TuningSite</a>
            <button class='navbar-toggler ' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='../../../../../../brandOverview.php'>Merken</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='#'>Inloggen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
}

function headerAlbum(){
    echo "
<header>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark navClass'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='../index.php' style='font-weight: bold;'>TuningSite</a>
            <button class='navbar-toggler ' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='../brandOverview.php'>Merken</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='#'>Inloggen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>";
}
?>
