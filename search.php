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
<h2>_____</h2>
<h3>Medical folders</h3>
<style>
    .tb1{
        border:1px solid black;
    }
    tr:nth-child(even) {
  background-color: #D6EEEE;
    }
</style>
<table class="tb1">
    <thead>
        <tr>
        <th style="width: 40px">Folder n°</th>
        <th style="width: 40px">Order name</th>
        <th>Service</th>
        <th>Patient name</th>
        <th>Exit Ticket</th>
        <th>Emplacement</th>
        <th style="width: 40px">Department</th>
        <th>dateENter </th>
        <th>Exit date</th>
        <th>Archiv' date </th>
        </tr>
    </thead>
    <tbody>
    <?php
        if (isset($_POST['submit'])) {
            $fname=$_POST["fname"];
            $result=$conn->query("SELECT `numero_dossier`,`numero_ordre`,`service`,`billet_sortie`, `nom_patient`,`papier_externe`,`emplacement`,`date_entree`,`date_sortie`,`date_archive`,`numero_rayon` FROM `dossier_medicale_hospitalisation` where `numero_dossier` = '$fname'");
            $registres= $result->fetchAll();
            foreach ($registres as $data) {
            echo "<tr><td>".$data['numero_dossier']."</td><td>".$data['numero_ordre']."</td><td>".$data['service']."</td><td>".$data['nom_patient']."</td><td>".$data['papier_externe']."</td><td>".$data['emplacement']."</td><td>".$data['numero_rayon']."</td><td>".$data['date_entree']."</td><td>".$data['date_sortie']."</td><td>".$data['date_archive']."</td></tr>";
            }} ?>
    </tbody>
</table>



