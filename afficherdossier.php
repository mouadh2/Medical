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
<h2>_____</h2>
<style>
    .tb1{
        border:1px solid black;
    }
    tr:nth-child(even) {
  background-color: #D6EEEE;
    }
</style>
<form action="php/ajouterR.php" method="post">
    <h3>Medical folder</h3>
    <table class="tb1">
        <thead>
            <tr>
            <th style="width: 40px">Folder number</th>
            <th style="width: 40px">Order number</th>
            <th>Service</th>
            <th>EXIT ticket</th>
            <th>Patient name</th>
            <th>Emplacement</th>
            <th style="width: 40px">Department </th>
            <th>Enter Date</th>
            <th>Exit date </th>
            <th>Archiv date  </th>
            </tr>
        </thead>
        <tbody>
            <?php $result1=$conn->query("SELECT `numero_dossier`,`numero_ordre`,`service`,`billet_sortie`,`nom_patient`,
               `papier_externe`,`emplacement`,`date_entree`,`date_sortie`,`date_archive`,`numero_rayon` FROM `dossier_medicale_hospitalisation` ");
               $registres= $result1->fetchAll();
               foreach ($registres as $data) {
               echo "<tr><td>".$data['numero_dossier'].
                      "</td><td>".$data['numero_ordre'].
                      "</td><td>".$data['service'].
                      "</td><td>".$data['billet_sortie'].
                      "</td><td>".$data['nom_patient'].
                      "</td><td>".$data['emplacement'].
                      "</td><td>".$data['numero_rayon'].
                      "</td><td>".$data['date_entree'].
                      "</td><td>".$data['date_sortie'].
                      "</td><td>".$data['date_archive'].
                      "</td><td><form action='php/supprimerD.php?id=".$data['numero_dossier']."' method='post'><td>
                        <button type='submit' name='submit' class='btn btn-danger'>Supprimer</button></td></form></tr>";;
               }
            ?>
        </tbody>
    </table>
</form>
