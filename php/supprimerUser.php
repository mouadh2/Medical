<?php 
session_start();
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "archive";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);
if (isset($_POST['submit'])) {
            $sql=" DELETE FROM `utilisateur` WHERE `utilisateur`.`id_user` =".$_GET['id']."";
		$conn->exec($sql);
			header('location:/Archive/index.php');}
	 ?>