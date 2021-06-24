<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="John Doe">
    <title>Çelik Hasanaj</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="scripts.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-1elev rounded m-3" id="navi">
    <div class="container-fluid">
        <a id="logo-mobile" class="navbar-brand m-0" href="index.php"><img src="images/logo_w.png" alt="Çelik" width="70"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <a id="logo-web" class="navbar-brand m-0" href="index.php"><img src="images/logo_w.png" alt="Çelik" width="70"></a>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php $url = $_SERVER['REQUEST_URI']; if($url=="/personal/index.php") echo("active"); ?>" id="home" href="index.php">ÇELIK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php $url = $_SERVER['REQUEST_URI']; if($url=="/personal/projects.php") echo("active"); ?>" id="projects" href="projects.php">PROJECTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php $url = $_SERVER['REQUEST_URI']; if($url=="/personal/contact.php") echo("active"); ?>" id="contact" href="contact.php">CONTACT</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="d-flex align-items-center">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--<div class="container-fluid rounded p-2">-->
<!--   <img class="hero rounded img-fluid" src="images/cover.jpg" alt="cover">-->
<!--    <div class="hero rounded img-fluid p-2"></div>-->
<!--</div>-->
<!---->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
