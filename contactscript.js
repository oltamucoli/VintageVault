
window.onload = function() {

    function shkoAbout() {
        var aboutLink = document.getElementById('about');
        aboutLink.style.color = "black";

        aboutLink.onclick = function(event) {
            event.preventDefault();
            window.location.href = "AboutUs.php";
        };
    }

    function kthehuHome() {
        var homeLink = document.getElementById('home');
        homeLink.style.color = "black";

        homeLink.onclick = function(event) {
            event.preventDefault();
            window.location.href = "VintageVault.php";
        };
    }
    function shkoCart() {
    var cartLink = document.getElementById('cart');
    cartLink.style.color = "black";

    cartLink.onclick = function(event) {
        event.preventDefault();
        window.location.href = "ShoppingCart.php";
    };
}
    shkoAbout();
    kthehuHome();
    shkoCart();
};