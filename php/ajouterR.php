<?php 
session_start();
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "archive";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);
$dossier=$_POST["dossier"];
$type=$_POST["type"];
$emplacement=$_POST["emplacement"];
$dateE=$_POST["dateE"];
$dateS=$_POST["dateS"];
$dateA=$_POST["dateA"];
$rayon=$_POST["rayon"];

if (isset($_POST['submit'])) {
	    $sql = "INSERT INTO `registre` (`id_registre`, `date_debut`, `date_fin`, `emplacement`, `numero_rayon`, `date_archive`, `type_registre`) VALUES ('$dossier', '$dateE', '$dateS', '$emplacement', '$rayon', '$dateA', '$type');";
		$conn->exec($sql);
			header('location:/Archive/index.php');}
?>