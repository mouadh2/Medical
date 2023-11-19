<?php 
session_start();
if(!isset($_SESSION['nom'])){
    header("location:/Archive/login.php");
}else{
    $nom=  $_SESSION['nom'];
    $prenom=$_SESSION['prenom'];   
}
?> 
<?php include_once 'sidebar.php'; ?>

<style>
input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>
<h2>_____</h2>
<form action="php/ajouteruser.php" method="post">
<div>    <h3>Add User </h3> </div>
<div> 
    <label for="exampleInputEmail1">ID user </label>
    <input type="text" name="id" class="form-control" id="exampleInputEmail1"  required>   
</div>
<div>
    <label for="exampleInputPassword1">First Name </label>
    <input type="text" name="nom" class="form-control" id="exampleInputPassword1" required>
</div>
<div>
    <label for="exampleInputFile">Last Name</label>
    <input type="text" name="prenom" class="form-control" id="exampleInputPassword1" required>
</div>
<div> 
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="email" id="exampleInputPassword1" required>
</div>
<div>
    <label for="exampleInputEmail1">Pass</label>
    <input type="text" name="password" id="exampleInputPassword1" required>
</div>
<div>
    <button type="submit" name="submit">ADD</button>
</div>
</form>