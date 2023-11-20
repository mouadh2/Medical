<?php 
session_start();
if(!isset($_SESSION['nom'])){
    header("location:/Archive/login.php");
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
<style>
.center{
  display:block;
  margin-left:auto;
  margin-right:auto;
  width:50%;
}
p{
  text-align:center;
}

</style>
<div>
  <img src ="Img\hospital.jpg" class="center" width="350" height="400">
<p>
  <b>Contact Us:</b> <br>
  +2126000000<br>
  <b>Mail:</b><br>
  h@mail.ma<br>
  <i>Casablanca,Morocco</i>
</p>
</div>
