window.onload = function() {
function shkoCart() {
    var cartLink = document.getElementById('cart');
    cartLink.style.color = "black";

    cartLink.onclick = function(event) {
        event.preventDefault();
        window.location.href = "ShoppingCart.html";
    };
}
function kthehuHome() {
    var homeLink = document.getElementById('home');
    var continueLink = document.getElementsByClassName('continue')[0];
    var backLink = document.getElementsByClassName('back')[0];

    homeLink && homeLink.addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = "VintageVault.html";
    });
    homeLink && (homeLink.style.color = "black");

    continueLink && continueLink.addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = "VintageVault.html";
    });
    continueLink && (continueLink.style.color = "black");

    backLink && backLink.addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = "VintageVault.html";
    });
    backLink && (backLink.style.color = "black");
}

    function shkoAbout() {
        var aboutLink = document.getElementById('about');
        aboutLink.style.color = "black";

        aboutLink.onclick = function(event) {
            event.preventDefault();
            window.location.href = "AboutUs.html";
        };
    }
shkoAbout();
kthehuHome();
shkoCart();
}