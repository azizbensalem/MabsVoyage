<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabsvoyage";

$conn = new mysqli($servername, $username, $password, $dbname);

$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$pwd=md5($_POST['password']);
$pwd2=md5($_POST['password2']);
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$codepostal=$_POST['codepostal'];

if ($pwd==$pwd2 && $pwd!=NULL) {
$sql = "INSERT INTO client (CIN, Nom, Prenom, Sexe, Password, Telephone, Email, Adresse, Ville, CodePostal) VALUES ('$cin', '$nom', '$prenom', '$sexe', '$pwd', '$tel', '$email', '$adresse', '$ville', '$codepostal')";
mysqli_query($conn, $sql);
session_start();
$_SESSION["prenom"] = $_POST['prenom'];
$_SESSION["cin"] = $_POST['cin'];
$_SESSION["nom"] = $_POST['nom'];
header('Location: index.php'); 
}
else
{
header('Location: signup.php'); 
}
$conn->close();
?>
