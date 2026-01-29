<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Shop</title>
    <link rel="stylesheet" href="style.css">
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
        <li><a href="#" id="home"> Home</a></li>
        <li><a href="#" id="about">Contact us</a></li>
        <li><a href="#">Favorites</a></li>
        <li><a href="#" id="cart">Shopping cart</a></li>
        <li><a href="#" id="login-link">Log in</a></li>
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


    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-text">
            <h3>Timeless Antique Pieces</h3>
            <h1>HANDPICKED VINTAGE FINDS & RARE COLLECTIBLES</h1>
            <p>Discover one-of-a-kind vintage treasures, carefully chosen for their charm, quality, and history.</p>
            <button>SHOP NOW</button>
        </div>
    </section>


    <!-- POPULAR PRODUCTS -->
<section class="products">
  <div class="title">POPULAR ANTIQUE ITEMS</div>
  <div class="view">View all</div>

  <div class="slider-wrapper">
    <button class="arrow" onclick="prevProduct()">&#10094;</button>

    <div class="grid" id="slider">
      <div class="item"><img id="img0"><p id="txt0"></p></div>
      <div class="item"><img id="img1"><p id="txt1"></p></div>
      <div class="item"><img id="img2"><p id="txt2"></p></div>
      <div class="item"><img id="img3"><p id="txt3"></p></div>
      <div class="item"><img id="img4"><p id="txt4"></p></div>
    </div>

    <button class="arrow" onclick="nextProduct()">&#10095;</button>
  </div>

<script>
let index = 0;

const products = [
  { img: "lamp1.png", text: "Vintage Brass Lamp" },
  { img: "clock1.jpg", text: "Old Victorian Clock" },
  { img: "sculpture.png", text: "Bronze Mini Statue" },
  { img: "chair.png", text: "Classic Antique Chair" },
  { img: "plateset1.png", text: "Decorative Vintage Plate Set" },
  { img: "clock2.jpg", text: "Vintage Rope Clock" },
  { img: "cup.jpg", text: "Vintage Tea Cup" },
  { img: "phone.jpg", text: "Antique Phone" },
  { img: "radio.png", text: "Vintage Radio" },
  { img: "piktura.png", text: "Painting of Yacht in the Bay of Naples" }
];

function render() {
  for (let i = 0; i < 5; i++) {
    let p = products[(index + i) % products.length];
    document.getElementById("img" + i).src = p.img;
    document.getElementById("txt" + i).innerText = p.text;
  }
}

function nextProduct() {
  index++;
  render();
}

function prevProduct() {
  index--;
  if (index < 0) index = products.length - 1;
  render();
}

window.onload = render;
</script>


  </div>

</section>
    
    <!-- BANNER SECTION -->
    <section class="our-banner">
    <div class="banner-content">
        <div class="title">OUR COLLECTIONS</div>

        <div class="collection-grid">

            <div class="collection-card">
                <img src="book.png" alt="">
                <h4>LITERACY</h4>
                <p>Pages of the Past</p>
            </div>

            <div class="collection-card">
                <img src="jewelry.png" alt="">
                <h4>IT'S ALL IN THE DETAILS</h4>
                <p>Heirloom Gems</p>
            </div>

            <div class="collection-card">
                <img src="frame.png" alt="">
                <h4>BRING LIFE TO YOUR HOME</h4>
                <p>Frames of Time</p>
            </div>

            <div class="collection-card">
                <img src="plateset.png" alt="">
                <h4>MAKE EVERY DINNER SPECIAL</h4>
                <p>Dining Delights</p>
            </div>

         </div>
        </div>
    </section>

        <!-- BROWSE SECTION -->
    <header class="site-header">
    <h1>BROWSE VINTAGE VAULT</h1>
  </header>

  <nav class="tabs">
    <div class="tab active">BY CATEGORY</div>
    <div class="tab">BY CREATOR</div>
    <div class="tab">BY STYLE</div>
    <div class="tab">ANTIQUES</div>
    <div class="tab">CONTEMPORARY</div>
    <div class="tab">ARTISTS</div>
  </nav>

  <main class="container">
    <ul class="grid">
      <li class="grid-item">
        <div class="avatar-wrap"><img src="furniture.png" alt="Furniture"></div>
        <div class="label">Furniture</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="decor.png" alt="Decor"></div>
        <div class="label">Decor / Accessories</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="art.png" alt="Art"></div>
        <div class="label">Art</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="lighting.png" alt="Lighting"></div>
        <div class="label">Lighting</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="sculpture1.png" alt="Sculpture"></div>
        <div class="label">Sculpture</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="mirror1.png" alt="Mirrors"></div>
        <div class="label">Mirrors</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="outdoor.png" alt="Outdoor"></div>
        <div class="label">Outdoor</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="armchair.png" alt="Armchairs"></div>
        <div class="label">Armchairs</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="coffeetable.png" alt="Coffee Tables"></div>
        <div class="label">Coffee Tables</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="console.png" alt="Console Tables"></div>
        <div class="label">Console Tables</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="side.png" alt="Side Chairs"></div>
        <div class="label">Side Chairs</div>
      </li>

      <li class="grid-item">
        <div class="avatar-wrap"><img src="cubbord.png" alt="Cupboards"></div>
        <div class="label">Cupboards</div>
      </li>
    </ul>
  </main>
  
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