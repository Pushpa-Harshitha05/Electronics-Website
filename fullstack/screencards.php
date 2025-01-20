<!DOCTYPE html>
<html lang="en">

<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if (!$user_id) {

} else {
  $select_user = mysqli_query($conn, "SELECT * FROM `details` WHERE id='$user_id'");

  if (!$select_user) {
    die("query failed");
  }

  if (mysqli_num_rows($select_user) > 0) {
    $fetch_user = mysqli_fetch_assoc($select_user);
  } else {
    $fetch_user = null;
  }
}

?>

<head>
  <title>SCREEN CARDS APPLIANCES</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="products_style.css">
</head>

<body>
  <header><BR>
    <div class="logo">
      <p><u>Guru Mobile Accessories</u> &amp; <u> Electronics</u></p>
    </div>
    <?php if ($user_id && $fetch_user): ?>
      <div class="profile">
        <div class="cartitems">
          <img src="images/homepage_imgs/cart.png" alt="cart" id="cart">
          <span id="cartcount">0</span>
        </div>
        <div class="profile-container">
          <img src="images/homepage_imgs/profile_img.png" alt="profile" id="profileimg">
          <div class="dropdown-menu" id="dropdownMenu">
            <a href="myprofile.php">My Profile</a>
            <a href="#">Orders</a>
            <a href="#">Settings</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    <?php else: ?>
      <div class="userbtns">
        <a href="sign.html">Sign up</a>
        <span>or</span>
        <a href="loginform.html">Login</a>
      </div>
    <?php endif; ?>

  </header><br><br><br><br><br><br>
  <div class="start">
    <nav>
      <a href="Homepage.php" target="_parent">Home</a>
      <a href="appl.php" target="_self"><mark>Appliances</mark></a>
      <a href="about.php" target="_self">About</a>
      <a href="#footer" target="_self">Contact us</a>
    </nav>
  </div>
  <section>
    <h1>SCREEN CARDS</h1>
  </section>

  <main class="product-container">
    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen1.jpeg" alt="REALME FRONT GUARD">
      <h3>REALME</h3>
      <p>9I 5G FRONT 9H FIBER GUARD BACK PROTECTOR WITH CAMERA GLASSREALME 9I 5G FRONT</p>
      <p>
        <b>&#8377;&nbsp; 159.00</b> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>

    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen2.jpeg" alt="IPAD">
      <h3>IPAD</h3>
      <p>iPad 2022 - Glass Screen Protector</p>
      <p>
        <b>&#8377; 499.00</b> <s>&#8377; 2299.00</s> Inclusive of all taxes
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>

    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen3.webp" alt="CZARTECH GLASS">
      <h3>CZARTECH</h3>
      <p>Tempered Glass Guard for Apple iPhone 13 Pro Max, Apple iphone 14 plus (Pack of 2)</p>
      <p>
        Special price <br> <b>&#8377; 474.00</b> <s>&#8377; 1,999.00</s> 76% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>
  </main>

  <main class="product-container">
    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen4.jpeg" alt="IPHONE GLASS">
      <h3>IPHONE</h3>
      <p>iPhone 8 - 9D Tempered Glass Screen Protector with Applicator</p>
      <p>
        <b>&#8377; 499.00</b> <s>&#8377; 999.00</s> Inclusive of all taxes INR*
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>

    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen9.jpg" alt="BOAT Stone 580">
      <h3>POPIO</h3>
      <p>Tempered Glass Screen Protector Compatible For Iphone 13 / Iphone 13 Pro/Iphone 14 (Black) Edge To Edge
        Coverage</p>
      <p>
        <b>&#8377; 265.00</b> <s>&#8377; 599.00</s> 56% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>

    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen6.webp" alt="XTRENGTH">
      <h3>XTRENGTH</h3>
      <p>Edge To Edge Tempered Glass for Samsung Galaxy Note 10 Plus</p>
      <p>
        <b>&#8377; 429.00</b> <s>&#8377; 1,499.00</s> 60% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>
  </main>

  <button type="button" id="loadbtn">Load More</button>
  <main class="product-container" id="hide">
    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen7.jpg" alt="POPIO Glass">
      <h3>POPIO</h3>
      <p>Tempered Glass Compatible For Samsung Galaxy M30 / M30S / A30 / A30S / A50 / A50S (Transparent) Full Screen
        Coverage</p>
      <p>
        <b>&#8377; 266.00</b> <s>&#8377; 599.00</s> 63% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>
    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen8.jpg" alt="OpenTech">
      <h3>OpenTech</h3>
      <p>Tempered Glass Screen Protector Compatible For Samsung Galaxy M33 / F23 / M23 / A23 / M13 4G With Edge To Edge
        Coverage</p>
      <p>
        <b>&#8377; 360.00</b> <s>&#8377; 999.00</s> 64% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>

    <form action="add_to_cart.php" method="post" class="product">
      <img src="images/screencard_imgs/screen5.jpeg" alt="GLASS FACTORY">
      <h3>GLASS FACTORY</h3>
      <p>11D TEMPERED GLASS SCREEN PROTECTOR FOR IQOO Z3 5G</p>
      <p>
        <b>&#8377; 320.00</b> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit buynow">Buy Now</button>
        <button class="btnsubmit addtocart">Add To Cart</button>
      </div>
    </form>

  </main>

  <footer id="footer">
    <div class="footer-content">
      <div class="footer-column">
        <h3>Contact Us</h3>
      </div>
      <div class="footer-column details">
        <p>Email: <a href="mailto:pharshitha2005@gmail.com">pharshitha2005@gmail.com</a></p>
        <p>Phone:
          <span class="number">+91 9182355044</span>
        </p>
        <p>Address: <span class="number">Appughar Road, OPP. SBI Bank, Sector-7, MVP Colony, Visakhapatnam - 530
            034</span></p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Guru Mobile Accessories & Electronics. All Rights Reserved.</p>
    </div>
  </footer>
  <script src="loadmore_script.js"></script>
</body>

</html>