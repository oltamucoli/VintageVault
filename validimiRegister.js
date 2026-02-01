function validateRegister(event) {
    event.preventDefault();

    var name = document.getElementById('reg-name');
    var email = document.getElementById('reg-email');
    var pass = document.getElementById('reg-pass');
    var confirm = document.getElementById('reg-confirm');

    if (name.value === "") {
        alert("Please add your full name.");
        name.focus();
        return false;
    }

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

    if (confirm.value === "") {
        alert("Please confirm your password.");
        confirm.focus();
        return false;
    }

    if (pass.value !== confirm.value) {
        alert("Passwords do not match.");
        confirm.focus();
        return false;
    }

    alert("Registration successful!");
    window.location.href = "VintageVault.php";
    return true;
}

function emailValid(email) {
    var emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
    return emailRegex.test(email.toLowerCase());
}

function passwordValid(password) {
    var passwordRegex = /^[a-zA-Z0-9._]{1,10}$/;
    return passwordRegex.test(password);
}

document.getElementById('reg-btn').addEventListener('click', validateRegister);