function shkoLogin() {
    var loginLink = document.getElementById('login-link');
    if (loginLink) {
        loginLink.style.color = "black";

        loginLink.onclick = function(event) {
            event.preventDefault();
            window.location.href = "VintageVault.php"; 
        };
    }
}

shkoLogin();







