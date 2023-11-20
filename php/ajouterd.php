<?php 
session_start();
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "archive";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);
$dossier=$_POST["dossier"];
$order=$_POST["order"];
$service=$_POST["service"];
$billet=$_POST["billet"];
$nom=$_POST["nom"];
$papier=$_POST["papier"];
$emplacement=$_POST["emplacement"];
$dateE=$_POST["dateE"];
$dateS=$_POST["dateS"];
$dateA=$_POST["dateA"];
$rayon=$_POST["rayon"];

if (isset($_POST['submit'])) {
	     $sql = "INSERT INTO `dossier_medicale_hospitalisation` (`numero_dossier`, `numero_ordre`, `service`, `billet_sortie`, `nom_patient`, `papier_externe`, `emplacement`, `date_entree`, `date_sortie`, `date_archive`, `numero_rayon`) VALUES ('$dossier', '$order', '$service', '$billet', '$nom', '$papier', '$emplacement', '$dateE', '$dateS', '$dateA', '$rayon')";
		$conn->exec($sql);
			header('location:/Archive/index.php');}
	 ?>