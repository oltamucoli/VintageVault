function shkoRegister() {
    var registerLink = document.getElementById('register-link');
    registerLink.style.color = "blue";

    registerLink.onclick = function(event) {
        event.preventDefault();
<<<<<<< HEAD
        window.location.href = "Register.php";
=======
        window.location.href = "register.php";
>>>>>>> 4aeb92be5879bea8c4672c089814adbceb13d017
    };
}
shkoRegister();
