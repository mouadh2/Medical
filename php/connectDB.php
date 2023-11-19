<?php
$servername="localhost";
$username="root";
$password="";
$dbname="archive";

  $connect= new mysqli($servername, $username, $password, $dbname);
  if ($connect->connect_error){
      die("Erreure de Connection:".$connect->connect_error);
  }
?>