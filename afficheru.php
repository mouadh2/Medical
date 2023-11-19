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

<div>
    <h2>_____</h2>
<table class = "tb1">
<thead>
    <tr>
        <th style="width: 40px">ID User</th>
        <th style="width: 40px">First Name</th>
        <th>Last Name</th>
        <th>Login</th>
        <th>Pass</th>
    </tr>
</thead>
<tbody>
<?php
    $result=$conn->query("SELECT * FROM `utilisateur`");
    $registres= $result->fetchAll();
    foreach ($registres as $data) {
    echo "<tr><td>".$data['id_user'].
    "</td><td>".$data['nom_user'].
    "</td><td>".$data['prenom_user'].
    "</td><td>".$data['email_user'].
    "</td><td>".$data['password_user'].
    "</td><form action='php/supprimerUser.php?id=".$data['id_user'].
    "'method='post'><td><button type='submit' name='submit' class='btn btn-danger'>Supprimer</button></td></form></tr>";}
    ?>
</tbody>
</table>
</div>