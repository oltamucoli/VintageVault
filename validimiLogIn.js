document.getElementById('login-btn').addEventListener('click', validateLogin);
function validateLogin(event) {
    event.preventDefault();

    var email = document.getElementById('login-email');
    var pass = document.getElementById('login-pass');
    var terms = document.getElementById('login-terms').checked;

    if (email.value === "") {
        alert("Please add your email.");
        email.focus();
        return false;
    }

    if (!emailValid(email.value)) {
        alert("Email is not valid.");
        email.focus();
        return false;
    }

    if (pass.value === "") {
        alert("Please add your password.");
        pass.focus();
        return false;
    }

    if (!passwordValid(pass.value)) {
        alert("Password max 10 characters and only allows letters, numbers, . and _");
        pass.focus();
        return false;
    }

    alert("Login successful!");
   window.location.href = "VintageVault.php"; 
    
    return true;
}

document.getElementById('login-btn').addEventListener('click', validateLogin);


function emailValid(email) {
    var emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    return emailRegex.test(email.toLowerCase());
}

function passwordValid(password) {
    var passwordRegex = /^[a-zA-Z0-9._]{1,10}$/;
    return passwordRegex.test(password);
}



    
