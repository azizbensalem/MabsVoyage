<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$_SESSION["ville"]=$_POST['ville'];
$_SESSION["date"]=$_POST['date'];
$_SESSION["time"]=$_POST['time'];
$person=$_POST['person'];
$_SESSION["person"]=$person;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Réservation</title>
<meta name="author" content="Surjith S M">

<meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
<meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

<script src="../../cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script><link rel="shortcut icon" href="img/favicon.ico">

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="css/plugin.css">
<link rel="stylesheet" href="css/main.css">

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
<a class="navbar-brand" href="index-2.html">
<img src="img/nav-logo.png" alt="nav-logo">
</a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="index.php">Accueil</a>
</li>

<li class="dropdown">
<a href="nosdestinations.php">Nos destination</a>
</li>
<li class="dropdown">
<a href="reservation.php">Reservation</a>
</li>
<li><a href="#footer">Contact</a></li>

<?php if (isset($_SESSION["prenom"])){echo '<li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION["prenom"].'<span class="caret"></span></a><ul class="dropdown-menu"><li><a href="mesreservations.php">Mes réservations</a></li><li><a href="deconnexion.php">Deconnexion</a></li><ul></li>';}else{echo '<li><a href="signin.php">Login</a></li>';}?></ul>
</ul>
</div>
</div>
</nav>

<section class="page_header">
<div class="container">
<div class="row">
<div class="col-md">
<h3 class="text-center" style="color: White;">Réservations</h3><br>
<div class="reservation-form wow fadeInUp">
<form class="logregform" action="reserver.php" method="POST" style="background-color: White;">
<?php
for ($i=0; $i < ($person) ; $i++) { 
	echo '<div class="row">
<h5>Accompagnateur '.($i+1).'</h5>
<div class="col-md-4">
<div class="form-group">
<label for="name" name="nom">Prénom</label>
<input type="text" class="form-control" id="name" name="prenom'.$i.'" required>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label for="cin" name="cin">Nom</label>
<input class="form-control" type="text" id="guests" name="nom'.$i.'" required>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
<label>Age</label>
<input class="form-control" type="number" id="guests" name="age'.$i.'" required>
</div>
</div>
</div>';}
?>

<div>
<button type="submit" class="btn btn-default btn-lg">Réserver</button>
</div>

</form>
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
<script src="js/vendor/bootstrap-clockpicker.min.js"></script>
<script src="js/vendor/jquery.magnific-popup.min.js"></script>
<script src="js/vendor/isotope.pkgd.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/wow.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/vendor/vegas/vegas.min.js"></script>
<script src="js/vendor/jquery.mb.YTPlayer.js"></script>
<script src="js/vendor/jquery.stellar.js"></script>
<script src="js/main.js"></script>
<script src="js/vendor/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendor/validate.js"></script>
<script src="js/reservation.js"></script>
<script src="js/vendor/mc/main.js"></script>
</body>
</html>
