<?php
require('connectDB.php');
session_start();
if (isset($_POST['submit_login'])) {

//
    $nom_user = $_POST['nom_user'];
    $email_user = $_POST['login_email'];
    $password_user = $_POST['password_user'];
    $query = "SELECT * FROM utilisateur WHERE email_user='$email_user' and password_user='$password_user' ";
    $result = mysqli_query($connect, $query);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $dat=mysqli_fetch_assoc($result);
        $_SESSION['nom']=$dat['nom_user'];
          $_SESSION['prenom']=$dat['prenom_user'];
          $_SESSION['id']=$dat['id_user'];
          header("location:/Archive/index.php");
    }
    else {
        echo "<script>alert('Le nom d\'utilisateur ou le mot de passe est incorrect.');</script>";

//        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>