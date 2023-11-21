<?php 
session_start();
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "archive";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);
if (isset($_POST['submit'])) {
            $sql=" DELETE FROM `dossier_medicale_hospitalisation` WHERE `dossier_medicale_hospitalisation`.`numero_dossier` =".$_GET['id']."";
		$conn->exec($sql);
			header('location:/Archive/afficherdossier.php');}
	 ?>