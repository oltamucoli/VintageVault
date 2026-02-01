<?php
session_start();

if(isset($_SESSION['Email Address'])){
   header("location:VintageVault.php");
}else{
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

<div class="wrapper">
    <div class="left">
        <p class="top-text">Not a member? <a href="#" id="register-link">Register</a></p>

        <h1>Login</h1>

        <form>
            <input type="email" id="login-email" placeholder="Email Address">
            <input type="password" id="login-pass" placeholder="Password">
            

             <label class="terms">
                <input type="checkbox" id="login-terms">
                I agree to all the statements included in the terms of service
            </label>

            <button id="login-btn">Login</button>
        </form>
        
        <script src="loginscript.js"></script>
        <script src="validimiLogIn.js"></script>


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

</body>
</html>
<?php 

}
?>