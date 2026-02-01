<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

$error = "";
$success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    
    $result = $user->register($name, $email, $password, $confirm);
    if ($result === true) {
        
        header("Location: VintageVault.php");
        exit;
    } else {
        $error = $result; 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyle.css">
    <title>Register</title>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="register.png" class="side-img">
    </div>

    <div class="right">
           <p class="top-text">
            Already a member? <a href="LogIn.php" id="login-link">Login</a>
        </p>

        <h1>Register</h1>
            <?php
            if ($error) {
            echo "<p style='color:red;'>$error</p>";
            }
            ?>
        <form method="POST" action="">
            <input type="text" id="reg-name" name="name" placeholder="Full Name">
            <input type="email" id="reg-email"  name="email" placeholder="Email Address">
            <input type="password" id="reg-pass"  name="password" placeholder="Password">
            <input type="password" id="reg-confirm"  name="confirm" placeholder="Confirm Password">

            <label class="terms">
                <input type="checkbox" id="reg-terms">
                I agree to all the statements included in the terms of service
            </label>
            <button id="reg-btn">Register</button>
        </form>
        
        <script src="validimiRegister.js"></script>


        <div class="divider">Or</div>

        <div class="socials">
            <button class="apple">Sign up with Apple</button>
            <button class="facebook">Sign up with Facebook</button>
        </div>
    </div>
</div>

</body>
</html>
