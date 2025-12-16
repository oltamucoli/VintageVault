function shkoRegister() {
    var registerLink = document.getElementById('register-link');
    registerLink.style.color = "blue";

    registerLink.onclick = function(event) {
        event.preventDefault();
        window.location.href = "register.html";
    };
}
shkoRegister();
