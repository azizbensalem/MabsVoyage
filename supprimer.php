<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$cinPerson=$_SESSION["cin"];
$idRes=$_GET["id"];
$a="DELETE FROM reservation WHERE idRes='$idRes'";
mysqli_query($conn, $a);
$b="DELETE FROM personne WHERE idRes='$idRes' AND cinPerson='$cinPerson'";
mysqli_query($conn, $b);
header('Location: mesreservations.php');
?>