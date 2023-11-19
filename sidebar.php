<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 10;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #fff;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
.logout{
  float:right;
}
</style>


<div class="navbar">
  <div class="subnav">
    <button class="subnavbtn">Users <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="ajouteru.php">add</a>
      <a  href="afficheru.php">display</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">medical folder <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="ajouterdossier.php">Ajouter Dossier</a>
      <a  href="ajouteretatdossier.php">Ajouter état d'un dossier</a>
      <a href="afficherdossier.php">Afficher Dossier</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Registres <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="ajouterregister.php">add Register</a>
      <a href="ajouteretatregistre.php">add state's register </a>
      <a href="afficherregistreAdmission.php">Register admitted</a>
      <a href="afficherregistreMaternité.php">Register's motherhood</a>
      <a href="afficherregistreDeces.php">Register's death</a>
    </div>
  </div>
  <a href="#contact">Contact</a>
  <div class="logout">
    <a href="logout.php" >LogOut</a>
  </div>
</div>