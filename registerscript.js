function shkoLogin() {
    var loginLink = document.getElementById('login-link');
    loginLink.style.color = "blue";

    loginLink.onclick = function(event) {
        event.preventDefault();
        window.location.href = "login.html";
    };
}

shkoLogin();