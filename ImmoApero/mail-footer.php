<?php
    $fp = fopen('data.csv', 'a');
    fwrite($fp, $_GET["name"] . ';' . $_GET["mail"] . "\r\n");
    fclose($fp);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apero Immo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="icon" href="images/favicon.png"/>

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a id="main_logo" class="navbar-brand" href="index.html"><img id="logo_menu" src="images/favicon.png">APERO IMMO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index.html" class="nav-link"  id="nav-link-selected">🏠</a></li>
                <li class="nav-item"><a href="podcast.html" class="nav-link" id="nav-link-unselected">Le podcast 🎙</a></li>
                <li class="nav-item"><a href="meetup.html" class="nav-link" id="nav-link-unselected">Le meetup 🍻</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link" id="nav-link-unselected">Le blog 💬 </a></li>
                <li class="nav-item"><a href="ressources.html" class="nav-link" id="nav-link-unselected">Les ressources 📚</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link" id="nav-link-unselected">About 💡</a></li>
                <li class="nav-item cta"><a href='mailto:hello@aperoimmo.co' class="nav-link"><span>💌</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<div>Ton mail a bien été enregistré !</div>
<a href="javascript:history.back()">Retour</a>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>