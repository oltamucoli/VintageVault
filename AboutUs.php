<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Shop</title>
    <link rel="stylesheet" href="aboutusstyle.css">
</head>
<body>
    <!-- NAVIGATION BAR -->
    <nav class="navbar">
        <div class="logo">
            <img src="2.png" alt="Logo">
        </div>
       
       <div class="search-wrapper">
    <input type="text" placeholder="Search products">
    <button class="search-btn">
        <img src="https://img.icons8.com/ios/50/search--v1.png" alt="search">
    </button>
    </div>
        <ul>
        <li><a href="#" id="home">Home</a></li>
        <li><a href="#" id="about">Contact us</a></li>
        <li><a href="#">Favorites</a></li>
        <li><a href="#" id="cart">Shopping cart</a></li>
        <li><a href="#">Log in</a></li>
    </ul>
</nav>
 <script src="script.js"></script>
<script src="contactscript.js"></script>
<script src="cartscript.js"></script>


        <!-- ICON CATEGORY ROW -->
    <section class="categories">
        <div>Vases</div>
        <div>Lighting</div>
        <div>Clocks</div>
        <div>Statues</div>
        <div>Plate Sets</div>
        <div>Furniture</div>
        <div>Gramophones</div>
    </section>



 <!-- ABOUT US -->

<section class="about">
    <div class="about-container">
        <div class="about-image">
            <img src="about.jpg" alt="Vintage Vault">
        </div>

        <div class="about-text">
            <h1>ABOUT VINTAGE VAULT</h1>
            <h2>Antiques & Vintage Design since 2000</h2>
            <p>
                Vintage Vault is a family-owned antique shop founded in 2000 in
                Prishtina, Kosove. What started as a small local collection has
                grown into a trusted destination for timeless furniture, art,
                and decorative pieces. We bring together history, craftsmanship,
                and character for collectors and design lovers.
            </p>
        </div>
    </div>
</section>

<section class="stats">
    <div class="stat">
        <h3>15,000+</h3>
        <p>Items in Inventory</p>
    </div>

    <div class="stat">
        <h3>120</h3>
        <p>Artists Represented</p>
    </div>

    <div class="stat">
        <h3>25</h3>
        <p>Years in Business</p>
    </div>

    <div class="stat">
        <h3>30,000+</h3>
        <p>Sales Completed</p>
    </div>
</section>

    <!-- CONTACT US -->


   <div class="container">
    <div class="left">
        <h1> CONTACT US </h1>
        <form>
            <input type="text" id="contact-name" name="name" placeholder="Name">
            <input type="email" id="contact-email" name="email" placeholder="Email">
            <input type="text" id="contact-phone" name="phone" placeholder="Phone">
            <textarea id="contact-msg" name="message" placeholder="Message"></textarea>

            <button id="contact-btn">SUBMIT</button>
        </form>
        <script src="validimiContact.js"></script>
        
    </div>

    <div class="right">
        <select>
            <option>Select a Location:</option>
            <option>Prishtina</option>
        </select>

        <select>
            <option>Select Inquiry Type:</option>
            <option>General</option>
            <option>Support</option>
        </select>

        <div class="info">
           
            <p><strong>Phone:</strong> +383 44 123 123</p>
            <p><strong>Address:</strong> Rr. Nëna Terezë, Prishtinë</p>
            <p><strong>Hours:</strong> 9am – 8pm</p>
        </div>
    </div>
</div>


     <!-- FOOTER -->
  <footer>
    <div class="top-icons">
        <div class="icon-box">
            <img src="icon1.png">
            <h4>EXPRESS DELIVERY</h4>
            <p>Express shipping 48-72h available</p>
        </div>

        <div class="icon-box">
            <img src="icon2.png">
            <h4>WE SHIP WORLDWIDE</h4>
            <p>Calculated at checkout & based on weight + size</p>
        </div>

        <div class="icon-box">
            <img src="icon3.png">
            <h4>SECURE PAYMENT</h4>
            <p>All major credit and debit cards accepted</p>
        </div>
    </div>
    <div class="footer-content">

        <div class="footer-left">
            <div class="title">JOIN OUR VAULT</div>
            <p>Exclusive drops<br>& 10% off your first purchase.</p>

            <div class="email-box">
                <input type="text" placeholder="Enter your email">
                <button>→</button>
            </div>
        </div>

        <div class="footer-help">
            <h3>Help</h3>
            <a href="#">Frequently Asked Questions</a>
            <a href="#">Shipping & Delivery</a>
            <a href="#">Returns & Exchanges</a>
            <a href="#">Order Tracking</a>
        </div>

        <div class="footer-explore">
            <h3>Explore</h3>
            <a href="#">Home Goods</a>
            <a href="#">Vintage & Antique</a>
            <a href="#">On Sale</a>
            <a href="#">VɅ Gift Card</a>
        </div>

        <div class="footer-trust">
            <h3>Trust</h3>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>

    </div>

</footer>

</body>
</html>