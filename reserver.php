<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";
$conn = new mysqli($servername, $username, $password, $dbname);

session_start();
$cinPerson=$_SESSION["cin"];
$circuit=$_SESSION["ville"];
$date=$_SESSION["date"];
$time=$_SESSION["time"];
$sql = "INSERT INTO reservation (cinPerson, Circuit, Date, Heure) VALUES ('$cinPerson','$circuit','$date','$time')";
mysqli_query($conn, $sql);

$a = "SELECT * FROM reservation WHERE (cinPerson LIKE '$cinPerson') AND (Circuit LIKE '$circuit') AND (Date LIKE '$date') AND (Heure LIKE '$time')";
$result=mysqli_query($conn, $a);
if (mysqli_num_rows($result) == 1) {
	while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["idRes"] = $row["idRes"];
    }
}
$idRes=$_SESSION["idRes"];
for ($i=0; $i <($_SESSION["person"]) ; $i++) {
$nom=$_POST["nom".$i];
$prenom=$_POST["prenom".$i];
$age=$_POST["age".$i];
$sql="INSERT into personne (cinPerson, idRes, Nom, Prenom, Age) VALUES ('$cinPerson','$idRes','$nom','$prenom','$age')";
mysqli_query($conn, $sql);
}

if (isset($nom) &&  isset($prenom) && isset($age)){
	header('Location: mesreservations.php');
}
    else
    header('Location: suivant.php');
?>