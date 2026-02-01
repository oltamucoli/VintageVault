<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['user_email'];
    $password = $_POST['user_pass'];

   

    $_SESSION['Email Address'] = $email;
    $_SESSION['username'] = strstr($email, '@', true); 
    $_SESSION['role'] = "user"; 

    header("Location: VintageVault.php");
    exit();
}
?>