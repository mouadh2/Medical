<?php 
session_start();
if(!isset($_SESSION['nom'])){
    header("location:/G_Archive/login.php");
}else{
    $nom=  $_SESSION['nom'];
    $prenom=$_SESSION['prenom'];   
}
?> 
<?php include_once 'sidebar.php'; ?>
<style>
input[type=text] {
    display:block;
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=date] {
    display:block;
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.custom-select{
    margin:10px;
}
</style>
<h2>_____</h2>

<form action="php/ajouterd.php" method="post">
    <div>
        <h3>Add Medical Folder</h3>
    </div>
    <div class=row>
        <label>Folder's Number</label>
        <input type="text" name="dossier" id="exampleInputEmail1" placeholder="Numéro de dossier" required>
    </div>
    <div class=row>
        <label>Order's Name</label>
        <input type="text" name="order" id="exampleInputPassword1" placeholder="Numéro d'order'" required>
    </div>
    <div class=row>
        <label>Department's Number</label>
        <input type="text" name="rayon" id="exampleInputPassword1" placeholder="Numéro de rayon'" required>
    </div>
    <div class=row>
        <label>Archiv's Date</label>
        <input type="date" name="dateA" id="exampleInputEmail1" required>
    </div>
    <div class=row>
        <label>Enter's Date</label>
        <input type="date" name="dateE" id="exampleInputPassword1" placeholder="Numéro d'order'" required>
    </div>
    <div class=row>
        <label>Exit's Date</label>
        <input type="date" name="dateS" id="exampleInputPassword1" placeholder="Numéro d'order'" required>
    </div>
    <div class="custom-select" >
        <label for="exampleInputEmail1">External paper</label><br><br>
        <select required name="papier">
            <option value="Oui">Oui</option>
            <option value="Non">Non</option>
        </select><br><br>
    </div>
    <div class="row">
        <label for="exampleInputPassword1">Exit ticket</label>
        <input type="text" name="billet"  id="exampleInputPassword1" placeholder="Billet de sortie"required>
    </div>
    <div class="custom-select">
        <label for="exampleInputFile">Emplacement</label><br><br>
        <select  required name="emplacement">
            <option value="Grand archive">big archive</option>
            <option value="Mini archive" >Mini archive</option>
        </select><br><br>
    </div>
    <div class="row">
    <label for="exampleInputEmail1">Patient name</label>
        <input type="text" name="nom"  id="exampleInputEmail1" placeholder="Nom du patient"required>
    </div>
    <div class="row">
        <label for="exampleInputPassword1">Service</label>
        <input type="text" name="service" id="exampleInputPassword1" placeholder="Service"required>
    </div>
    <div class="row">
        <button type="submit" name="submit"class="btn">Add</button>
    </div>