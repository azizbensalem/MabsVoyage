<?php 
require_once __DIR__ . '/vendor/autoload.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$mpdf = new \Mpdf\Mpdf();
$idRes=$_GET["id"];
$cinPerson=$_SESSION["cin"];
$data='<h2>Reçu de réservation :</h2><br>';
$data.='<label>Numéro de réservation:'.' '.'</label>'.$idRes.'<br>';
$data.='<label>Nom et prénom:'.' '.'</label>'.$_SESSION["prenom"].' '.$_SESSION["nom"].'<br>';
$data.='<label>CIN:'.' '.'</label>'.$_SESSION["cin"].'<br>';
$mpdf->WriteHTML($data);
$sql="SELECT * FROM reservation WHERE (idRes='$idRes')";
$result=mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
$data1='<label>Circuit:'.' '.'</label>'.$row["Circuit"].'<br>';
$data1.='<label>Date:'.' '.'</label>'.$row["Date"].'<br>';
$data1.='<label>Heure:'.' '.'</label>'.$row["Heure"].'<br><br>';
$mpdf->WriteHTML($data1);
}
$mpdf->WriteHTML("<h3>Participants</h3>");
$sql1="SELECT * FROM personne WHERE (idRes='$idRes') AND (cinPerson='$cinPerson')";
$res=mysqli_query($conn, $sql1);
while($row = mysqli_fetch_assoc($res)) {
$data2='<label>Nom:'.' '.'</label>'.$row["Nom"].'<br>';
$data2.='<label>Prenom:'.' '.'</label>'.$row["Prenom"].'<br>';
$data2.='<label>Age:'.' '.'</label>'.$row["Age"].'<br><br>';
$mpdf->WriteHTML($data2);
}
$mpdf->Output();
?>