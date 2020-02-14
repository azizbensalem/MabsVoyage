<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$idRes=$_SESSION["id"];
$cinPerson=$_SESSION["cin"];
$circuit=$_GET["circuit"];
$date=$_GET["date"];
$heure=$_GET["heure"];
$sql="UPDATE `reservation` SET `Circuit` = '$circuit', `Date` = '$date', `Heure` = '$heure' WHERE `reservation`.`idRes` = $idRes";
mysqli_query($conn, $sql);
$sup="DELETE FROM personne WHERE idRes='$idRes'";
mysqli_query($conn,$sup);
for ($i=1; $i <5 ; $i++) {
$nom=$_GET["nom".$i];
$prenom=$_GET["prenom".$i]; 
$age=$_GET["age".$i];  
if (($nom!="") && ($prenom!="") && ($age!="")) {
  	$ins="INSERT INTO personne (cinPerson, idRes, Nom , Prenom, Age) VALUES ('$cinPerson', '$idRes', '$nom', '$prenom', '$age')";
  	mysqli_query($conn, $ins);
  }
  }
header('Location: mesreservations.php');
?>