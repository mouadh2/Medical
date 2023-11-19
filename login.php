<!DOCTYPE HTML>
<html>  
<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: black;
}

div {
  border-radius: 5px;
  padding: 20px;
}
</style>
<body>


<?php ?>
<form action="php/login.php" method="post" name="login" class="user">
 <div>
  <input type="email" name="login_email" 
         id="exampleInputEmail"
         placeholder="Enter 'm2@gmail.com' ">
 </div>
 <div>
    <input type="password" name="password_user"
           id="exampleInputPassword" placeholder="Enter '123'">
 </div>
    <input type="submit" name="submit_login">
</form>


