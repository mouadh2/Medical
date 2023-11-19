<?php 
session_start();
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "archive";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);
$id=$_POST["id"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=$_POST["password"];

if (isset($_POST['submit'])) {
	     $sql = "INSERT INTO `utilisateur` (`id_user`, `nom_user`, `prenom_user`, `email_user`, `password_user`) VALUES ('$id', '$nom', '$prenom', '$email','$password')";
		$conn->exec($sql);
			header('location:/Archive/index.php');}
	 ?>