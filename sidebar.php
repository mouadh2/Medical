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
  background-color: red;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
.logout{
  float:right;
}

</style>

<html>
<div class="navbar">
  <div class="subnav">
    <a  href="index.php">Main Page</a>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Users </button>
    <div class="subnav-content">
      <a href="ajouteru.php">ADD user</a>
      <a  href="afficheru.php">DISPLAY user</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Medical Folders </button>
    <div class="subnav-content">
      <a href="ajouterdossier.php">ADD folder </a>
      <a href="afficherdossier.php">DISPLAY folder </a>
    </div>
  </div> 
  <div class="logout">
    <a href="logout.php" >LogOut</a>
  </div>
</div>
</html>