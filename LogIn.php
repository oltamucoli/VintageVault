<?php
session_start();
include_once 'Database.php';
include_once 'User.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new Database();
    $connection = $db->getConnection();
    $user = new User($connection);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginUser = $user->login($email, $password);
    if ($loginUser) {
       
        $_SESSION['user_id'] = $loginUser['id'];
        $_SESSION['email'] = $loginUser['email'];
        $_SESSION['role'] = $loginUser['role'];

        
        header("Location: VintageVault.php");
        exit;
    } else {
        $error = "Invalid login credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login</title>
</head>
<body>
    <?php if($error) echo "<p style='color:red;'>$error</p>"; ?>
<div class="wrapper">
    <div class="left">
        <p class="top-text">Not a member? <a href="Register.php" id="register-link">Register</a></p>
        <h1>Login</h1>
        <form id="login-form" action="LogIn.php" method="POST">
    <input type="email" id="login-email" name="user_email" placeholder="Email Address" required>
    <input type="password" id="login-pass" name="user_pass" placeholder="Password" required>

    <label class="terms">
        <input type="checkbox" id="login-terms" required>
        I agree to all the statements included in the terms of service
    </label>

    <button type="submit" id="login-btn">Login</button>
</form>
        <div class="divider">Or</div>
        <div class="socials">
            <button class="apple">Continue with Apple</button>
            <button class="facebook">Continue with Facebook</button>
        </div>
    </div>
    <div class="right">
        <img src="login.png" class="side-img">
    </div>
</div>
<script src="loginscript.js"></script>
<script src="validimiLogIn.js"></script>
</body>
</html>
