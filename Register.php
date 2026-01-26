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
        <p class="top-text">Already a member?  <a href="#" id="login-link">Login</a></p>

        <h1>Register</h1>

        <form>
            <input type="text" id="reg-name" placeholder="Full Name">
            <input type="email" id="reg-email" placeholder="Email Address">
            <input type="password" id="reg-pass" placeholder="Password">
            <input type="password" id="reg-confirm" placeholder="Confirm Password">

            <label class="terms">
                <input type="checkbox" id="reg-terms">
                I agree to all the statements included in the terms of service
            </label>
            <button id="reg-btn">Register</button>
        </form>
        <script src="registerscript.js"></script>
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
