<?php 
session_start();
if(!isset($_SESSION['nom'])){
    header("location:/G_Archive/login.php");
}else{
  $nom=  $_SESSION['nom'];
  $prenom=$_SESSION['prenom'];  
$servername = "localhost";
$username = "root";
$passwordd = "";
$dbname = "archive";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordd);   
}
?> 

<?php include_once 'sidebar.php'; ?>
<img src ="Img\hospital.jpg" >
