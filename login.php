<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";

$conn = new mysqli($servername, $username, $password, $dbname);

$cin=$_POST['cin'];
$pwd=md5($_POST['pwd']);

$a = "SELECT * FROM client WHERE CIN='$cin' AND Password='$pwd'";
$result=mysqli_query($conn, $a);
if (mysqli_num_rows($result) == 1) {
	session_start();
	$_SESSION["cin"] = "$cin";
	while($row = mysqli_fetch_assoc($result)) {
            $_SESSION["prenom"] = $row["Prenom"];
            $_SESSION["nom"] = $row["Nom"];
    }
	header('Location: index.php'); 

}
 else
 {
 	 header('Location: signin.php'); 
 }



?>