<?php 
session_start();
if (isset($_SESSION["prenom"]))
{
	require 'controle.php';
}
else
{
	header('Location: signin.php'); 
}
?>