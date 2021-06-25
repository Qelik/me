<?php ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Arberia Group - Uji Natyral Mineral</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    </head>
<body>

<section id="nav">
    <nav class="navbar fixed-top navbar-expand-xl m-2 rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="img/logo.png" class="img-fluid"></a>
            <button class="navbar-toggler" style="box-shadow: none !important; outline: none !important; border: none !important;" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fa-2x"></i>
                <!-- <span class="navbar-toggler-icon shadow-none"></span> -->
            </button>

            <div class="collapse navbar-collapse font-weight-bold" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item px-3 <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/index.php") echo("active"); ?>">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item dropdown px-3 <?php $url = $_SERVER['REQUEST_URI'];

                    if($url=="/ujiAlpeveEn/rrethne.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/missioni.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/historiku.php"){
                        echo("active");
                    } else {
                        echo("");
                    }

                    ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            COMPANY
                        </a>
                        <div id="komp" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/rrethne.php") echo("active"); ?>" href="rrethne.php">ABOUT US</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/missioni.php") echo("active"); ?>" href="missioni.php">MISSION AND VISION</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/historiku.php") echo("active"); ?>" href="historiku.php">BACKGROUND</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown px-3 <?php $url = $_SERVER['REQUEST_URI'];

                    if($url=="/ujiAlpeveEn/natyral.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/mineral.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/bull.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/cola.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/orange.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/lemon.php") {
                        echo("active");
                    } else {
                        echo("");
                    }

                    ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            PRODUCTS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/natyral.php") echo("active"); ?>" href="natyral.php">Natural Water of Alps</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/mineral.php") echo("active"); ?>" href="mineral.php">Mineral Water of Alps</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/bull.php") echo("active"); ?>" href="bull.php">Big Bull</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/cola.php") echo("active"); ?>" href="cola.php">Big Cola</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/orange.php") echo("active"); ?>" href="orange.php">Big Orange</a>
                            <a class="dropdown-item <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/lemon.php") echo("active"); ?>" href="lemon.php">Big Lemon</a>
                        </div>
                    </li>
                    <li class="nav-item px-3 <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/distributoret.php") echo("active"); ?>">
                        <a class="nav-link" href="distributoret.php">DISTRIBUTORS</a>
                    </li>
                    <li class="nav-item px-3 <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/media.php") echo("active"); ?>">
                        <a class="nav-link" href="media.php">MEDIA</a>
                    </li>
                    <li class="nav-item px-3 <?php $url = $_SERVER['REQUEST_URI']; if($url=="/ujiAlpeveEn/kontakti.php") echo("active"); ?>">
                        <a class="nav-link" href="kontakti.php">CONTACT</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item <?php $url = $_SERVER['REQUEST_URI'];

                    if($url=="/ujiAlpeveSh/bull.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/cola.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/distributoret.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/historiku.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/index.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/kontakti.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/lemon.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/mail.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveSh/media.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/mineral.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/missioni.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/orange.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/rrethne.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/natyral.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/porosi.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveSh/basket.php") {
                        echo("active");
                    } else {
                        echo("");
                    }

                    ?> px-1">
                        <a href="<?php $url = $_SERVER['REQUEST_URI'];

                        if($url=="/ujiAlpeveEn/bull.php") {
                            echo("../ujiAlpeveSh/bull.php");
                        } elseif($url=="/ujiAlpeveEn/cola.php") {
                            echo("../ujiAlpeveSh/cola.php");
                        } elseif ($url=="/ujiAlpeveEn/distributoret.php") {
                            echo("../ujiAlpeveSh/distributoret.php");
                        } elseif ($url=="/ujiAlpeveEn/historiku.php"){
                            echo("../ujiAlpeveSh/historiku.php");
                        } elseif ($url=="/ujiAlpeveEn/index.php") {
                            echo("../ujiAlpeveSh/index.php");
                        } elseif ($url=="/ujiAlpeveEn/kontakti.php"){
                            echo("../ujiAlpeveSh/kontakti.php");
                        } elseif ($url=="/ujiAlpeveEn/lemon.php") {
                            echo("../ujiAlpeveSh/lemon.php");
                        } elseif ($url=="/ujiAlpeveEn/mail.php"){
                            echo("../ujiAlpeveSh/mail.php");
                        } elseif ($url=="/ujiAlpeveEn/media.php") {
                            echo("../ujiAlpeveSh/media.php");
                        } elseif($url=="/ujiAlpeveEn/mineral.php") {
                            echo("../ujiAlpeveSh/mineral.php");
                        } elseif($url=="/ujiAlpeveEn/missioni.php") {
                            echo("../ujiAlpeveSh/missioni.php");
                        } elseif($url=="/ujiAlpeveEn/orange.php") {
                            echo("../ujiAlpeveSh/orange.php");
                        } elseif($url=="/ujiAlpeveEn/rrethne.php") {
                            echo("../ujiAlpeveSh/rrethne.php");
                        } elseif($url=="/ujiAlpeveEn/natyral.php") {
                            echo("../ujiAlpeveSh/natyral.php");
                        } elseif($url=="/ujiAlpeveEn/porosi.php") {
                            echo("../ujiAlpeveSh/porosi.php");
                        } elseif($url=="/ujiAlpeveEn/basket.php") {
                            echo("../ujiAlpeveSh/basket.php");
                        } else {
                            echo("");
                        }

                        ?>">SHQ</a>
                    </li>
                    <li class="nav-item <?php $url = $_SERVER['REQUEST_URI'];

                    if($url=="/ujiAlpeveEn/bull.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/cola.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/distributoret.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/historiku.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/index.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/kontakti.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/lemon.php") {
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/mail.php"){
                        echo("active");
                    } elseif ($url=="/ujiAlpeveEn/media.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/mineral.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/missioni.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/orange.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/rrethne.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/natyral.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/porosi.php") {
                        echo("active");
                    } elseif($url=="/ujiAlpeveEn/basket.php") {
                        echo("active");
                    } else {
                        echo("");
                    }

                    ?> px-1">
                        <a href="<?php $url = $_SERVER['REQUEST_URI'];

                        if($url=="/ujiAlpeveEn/bull.php") {
                            echo("bull.php");
                        } elseif($url=="/ujiAlpeveEn/cola.php") {
                            echo("cola.php");
                        } elseif ($url=="/ujiAlpeveEn/distributoret.php") {
                            echo("distributoret.php");
                        } elseif ($url=="/ujiAlpeveEn/historiku.php"){
                            echo("historiku.php");
                        } elseif ($url=="/ujiAlpeveEn/index.php") {
                            echo("index.php");
                        } elseif ($url=="/ujiAlpeveEn/kontakti.php"){
                            echo("kontakti.php");
                        } elseif ($url=="/ujiAlpeveEn/lemon.php") {
                            echo("lemon.php");
                        } elseif ($url=="/ujiAlpeveEn/mail.php"){
                            echo("mail.php");
                        } elseif ($url=="/ujiAlpeveEn/media.php") {
                            echo("media.php");
                        } elseif($url=="/ujiAlpeveEn/mineral.php") {
                            echo("mineral.php");
                        } elseif($url=="/ujiAlpeveEn/missioni.php") {
                            echo("missioni.php");
                        } elseif($url=="/ujiAlpeveEn/orange.php") {
                            echo("orange.php");
                        } elseif($url=="/ujiAlpeveEn/rrethne.php") {
                            echo("rrethne.php");
                        } elseif($url=="/ujiAlpeveEn/natyral.php") {
                            echo("natyral.php");
                        } elseif($url=="/ujiAlpeveEn/porosi.php") {
                            echo("porosi.php");
                        } elseif($url=="/ujiAlpeveEn/basket.php") {
                            echo("basket.php");
                        } else {
                            echo("");
                        }

                        ?>">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<?php
