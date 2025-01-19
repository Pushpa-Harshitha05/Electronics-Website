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
  <title>PENDRIVE ELECTRONIC APPLIANCES</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="pendrives_style.css">
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
            <a href="#">My Profile</a>
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
    <h1>Pendrives</h1>
  </section>

  <main class="product-container">
    <div class="product">
      <img src="images/pendrive_imgs/pendrive1.webp" alt="SANDISK Pendrive">
      <h3>SANDISK</h3>
      <p>Cruzer Blade 32GB USB 2.0 Flash Drive SDCZ50-032G-B35 (Red)</p>
      <p>
        <b>&#8377; 199.00</b> <s>&#8377; 230.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/pendrive_imgs/pendrive2.jpg" alt="Swivel Pendrive">
      <h3>Swivel</h3>
      <p>USB Pendrive 32 GB Ultra-thin and sleek Pen drive made with durable metal</p>
      <p>
        <b>&#8377; 550.00</b> INR* . In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/pendrive_imgs/pendrive3.webp" alt="Consistent Pendrive">
      <h3>Consistent</h3>
      <p>64GB Metal Pendrive With Keychain Carabiner, 5 Years Warranty 64 GB Pen Drive (Silver)</p>
      <p>
        <b>&#8377; 415.00</b> <s>&#8377; 1,999.00</s> 79% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
  </main>

  <main class="product-container">
    <div class="product">
      <img src="images/pendrive_imgs/pendrive4.webp" alt="SANDISK Pendrive">
      <h3>SANDISK</h3>
      <p>Ultra Dual Drive m3.0 128GB USB 3.0 (Type-A),<br> Micro USB (Type-B) Flash Drive.</p>
      <p>
        <b>&#8377; 909.00</b> <s>&#8377; 1,000.00</s> INR* In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/pendrive_imgs/pendrive5.jpg" alt="HP Pendrive">
      <h3>HP</h3>
      <p>v236w USB 2.0 64GB Pen Drive, Metal, Silver</p>
      <p>
        <b>&#8377; 399.00</b> <s>&#8377; 725.00</s> INR* In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/pendrive_imgs/pendrive6.webp" alt="SanDisk Pendrive">
      <h3>SanDisk</h3>
      <p>SDDDC3-064G-I35NB 64 GB OTG Drive (Blue, Type A to Type C)</p>
      <p>
        Special price<br><b>&#8377; 659.00</b> <s>&#8377; 1,600.00</s> 58% off INR*
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
  </main>

  <button type="button" id="loadbtn">Load More</button>
  <main class="product-container" id="hide">
    <div class="product">
      <img src="images/pendrive_imgs/pendrive7.jpg" alt="Amazon Basics keyboard">
      <h3>Amazon Basics</h3>
      <p>64 GB Flash Drive | USB 3.0 | Upto 150 MB/s | Silver</p>
      <p>
        <b>&#8377; 469.00</b> <s>&#8377; 999.00</s> 53% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
    <div class="product">
      <img src="images/pendrive_imgs/pendrive8.webp" alt="HP">
      <h3>HP</h3>
      <p>USB 2.0 Flash Drive 128GB v150w-Blue</p>
      <p>
        <b>&#8377; 569.00</b> <s>&#8377; 1900.00</s> 70% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/pendrive_imgs/pendrive9.webp" alt="Geonix Pendrive">
      <h3>Geonix</h3>
      <p>8GB Pendrive I Silver I USB 2.0 I Keyring Design I Lightweight I Variant 8GB I 5 Years Warranty</p>
      <p>
        <b>&#8377; 319.00</b> <s>&#8377; 799.00</s> 63% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

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