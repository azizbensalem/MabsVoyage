<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";

$conn = new mysqli($servername, $username, $password, $dbname);
$a="SELECT * FROM circuitt WHERE Destination LIKE 'tozeur'";
$result=mysqli_query($conn, $a);
    while($row = mysqli_fetch_assoc($result)) {
           $destination=$row["Destination"];
           $description=$row["Description"];
           $duree=$row["Duree"];
           $moyent=$row["MoyenT"];
           $theme=$row["Theme"];
    }
    $b="SELECT * FROM circuitt WHERE Destination LIKE 'hammamet'";
$result=mysqli_query($conn, $b);
    while($row = mysqli_fetch_assoc($result)) {
           $destination1=$row["Destination"];
           $description1=$row["Description"];
           $duree1=$row["Duree"];
           $moyent1=$row["MoyenT"];
           $theme1=$row["Theme"];
    }
    $c="SELECT * FROM circuitt WHERE Destination LIKE 'djerba'";
$result=mysqli_query($conn, $c);
    while($row = mysqli_fetch_assoc($result)) {
           $destination2=$row["Destination"];
           $description2=$row["Description"];
           $duree2=$row["Duree"];
           $moyent2=$row["MoyenT"];
           $theme2=$row["Theme"];
    }
    $d="SELECT * FROM circuitt WHERE Destination LIKE 'paris'";
$result=mysqli_query($conn, $d);
    while($row = mysqli_fetch_assoc($result)) {
           $destination3=$row["Destination"];
           $description3=$row["Description"];
           $duree3=$row["Duree"];
           $moyent3=$row["MoyenT"];
           $theme3=$row["Theme"];
    }
    session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>MABSVoyage</title>
<meta name="author" content="Surjith S M">
<meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
<meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">
<script src="../../cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script><link rel="shortcut icon" href="img/favicon.ico">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/plugin.css">
<link rel="stylesheet" href="css/main.css">


<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1530003103982991');
    fbq('track', "PageView");
    </script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1530003103982991&amp;ev=PageView&amp;noscript=1" /></noscript>

</head>
<body>
<div class="preloder animated">
<div class="scoket">
<img src="img/preloader.svg" alt="" />
</div>
</div>
<div class="body">
<div class="main-wrapper">

<nav class="navbar navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">
<img src="img/nav-logo.png" alt="nav-logo">
</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="index.php">Accueil</a>
</li>

<li class="dropdown">
<a href="#propos" class="scroll">Nos destination</a>
</li>
<li class="dropdown">
<a href="reservation.php">Reservation</a>
</li>
<li><a href="#footer">Contact</a></li>

<?php if (isset($_SESSION["prenom"])){echo '<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION["prenom"].'<span class="caret"></span></a><ul class="dropdown-menu"><li><a href="mesreservations.php">Mes réservations</a></li><li><a href="deconnexion.php">Deconnexion</a></li><ul></li>';}else{echo '<li><a href="signin.php">Login</a></li>';}?> </ul>       
</div>
</div>
</nav>

<section class="home">
<div class="tittle-block logo">
<h1>MABSVoyage</h1>
<h2>Bienvenue dans notre site</h2>
</div>
<div class="scroll-down hidden-xs">
<a href="#about">
<img src="img/arrow-down.png" alt="down-arrow">
</a>
</div>
</section>

<section class="about" id="about">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1>A propos</h1>
</div>
</div>
</div>
<div class="row wow fadeInUp">
<div class="col-md-4">
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 hidden-sm about-photo">
<div class="image-thumb">
<img src="img/djerba.jpg" data-mfp-src="img/fullImages/pic1.jpg" class="img-responsive" alt="logo">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 about-photo hidden-xs">
<img src="img/6.jpg" data-mfp-src="img/fullImages/pic2.jpg" class="img-responsive" alt="logo">
</div>
<div class="col-sm-6 about-photo hidden-xs">
<img src="img/paris.jpg" data-mfp-src="img/fullImages/pic3.jpg" class="img-responsive" alt="logo">
</div>
</div>
</div>
</div>
<div class="col-md-8">
<p>
Avec plus de 23 ans d'expérience dans le domaine du voyage, c'est toujours avec un grand plaisir et avec professionnalisme que je m'occupe de mes clients et les conseille afin qu'ils fassent de leurs vacances une expérience inoubliable, ma mission première c'est le service, avant la vente, pendant la vente et aussi après la vente.
</p>
<br>
<p>
Les clients qui réservent sur notre internet seront rappelés le lendemain par une conseillère spécialisée afin de leur donner tous les conseils nécessaires et leur assurer notre service impeccable.
</p>
</div>
</div>
</div>
</section>

<section class="special" id="propos">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header wow fadeInDown">
<h1 class="white">Nos destinations</h1>
</div>
</div>
</div>
<div class="row wow fadeInUp">
<div class="col-md-offset-1 col-md-10">
<div class="flexslider special-slider">
<ul class="slides">
<li>
<div class="slider-img">
<img src="img/tozeur1.png" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
<h1><?php echo $destination; ?></h1>
</div>
<p><?php echo $description; ?></p>
<a class="btn btn-default" href="reservation.php?id=tozeur" role="button">Réserver maintenant</a>
</div>
</li>
<li>
<div class="slider-img">
<img src="img/hammamet1.jpg" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
<h1><?php echo $destination1; ?></h1>
</div>
<p><?php echo $description1; ?></p>
<a class="btn btn-default" href="reservation.php?id=hammamet" role="button">Réserver maintenant</a>
</div>
</li>
<li>
<div class="slider-img">
<img src="img/djerba1.jpg" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
<h1><?php echo $destination2; ?></h1>
</div>
<p><?php echo $description2; ?></p>
<a class="btn btn-default" href="reservation.php?id=djerba" role="button">Réserver maintenant</a>
</div>
</li>
<li>
<div class="slider-img">
<img src="img/paris1.jpg" alt="" />
</div>
<div class="slider-content">
<div class="page-header">
<h1><?php echo $destination3; ?></h1>
</div>
<p><?php echo $description3; ?></p>
<a class="btn btn-default" href="reservation.php?id=paris" role="button">Réserver maintenant</a>
</div>
</li>
</ul>
<div class="direction-nav hidden-sm">
<div class="next">
<a><img src="img/right-arrow.png" alt="" /></a>
</div>
<div class="prev">
<a><img src="img/left-arrow.png" alt="" /></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="footer" id="footer">
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-12">
<h1>Qui sommes-nous?</h1>
<p>MABSVoyage est une agence de voyage créée en 1996, elle vous propose les meilleurs destinations à un prix raisonnable</p>
</div>
<div class="col-md-4  col-sm-12">
<h1>Contact</h1>
<div class="footer-social-icons">
<a href="http://www.facebook.com/">
<i class="fa fa-facebook-square"></i>
</a>
<a href="http://www.twitter.com/">
<i class="fa fa-twitter"></i>
</a>
<a href="http://plus.google.com/">
<i class="fa fa-google"></i>
</a>
<a href="http://www.youtube.com/">
<i class="fa fa-youtube-play"></i>
</a>
<a href="http://www.vimeo.com/">
<i class="fa fa-vimeo"></i>
</a>
<a href="http://www.pinterest.com/">
<i class="fa fa-pinterest-p"></i>
</a>
<a href="http://www.linkedin.com/">
<i class="fa fa-linkedin"></i>
</a>
</div>
<div class="footer-address">
<p><i class="fa fa-map-marker"></i>14 Avenue de la liberté,La Manouba</p>
<p><i class="fa fa-phone"></i>Tel: 12 158 369</p>
<p><i class="fa fa-envelope-o"></i><a href="">mabsvoyage@gmail.com</a></p>
</div>
</div>
</div>
</div>

<div class="footer-copyrights">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>Travail élaboré par Med Aziz Ben Salem & Wael Arafa 2IM1</p>
</div>
</div>
</div>
</div>
</section>
</div>
</div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/jquery.flexslider-min.js"></script>
<script src="js/vendor/spectragram.js"></script>
<script src="js/vendor/owl.carousel.min.js"></script>
<script src="js/vendor/velocity.min.js"></script>
<script src="js/vendor/velocity.ui.min.js"></script>
<script src="js/vendor/bootstrap-datepicker.min.js"></script>
<script src="js/vendor/bootstrap-clockpicker.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/vendor/vegas/vegas.min.js"></script>
<script src="js/vendor/jquery.mb.YTPlayer.js"></script>
<script src="js/vendor/jquery.stellar.js"></script>
<script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendor/mc/main.js"></script>
<script src="js/vendor/validate.js"></script>
<script src="js/reservation.js"></script>
<script src="js/main.js"></script>
</body>
</html>
