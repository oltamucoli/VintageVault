
function shkoLogin() {
    var loginLink = document.getElementById('login-link');
    loginLink.style.color = "black";

    loginLink.onclick = function(event) {
        event.preventDefault();
        window.location.href = "LogIn.php";
    };
}

shkoLogin();







