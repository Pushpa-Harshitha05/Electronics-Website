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
  <title>SPEAKER ELECTRONIC APPLIANCES</title>
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
    <h1>SPEAKERS</h1>
  </section>

  <main class="product-container">
    <div class="product">
      <img src="images/speaker_imgs/speaker1.jpg" alt="INVICTO Speaker">
      <h3>INVICTO</h3>
      <p>TG113 Portable Bluetooth Speaker with USB/Micro SD Card/AUX/Mic Multimedia Speaker System</p>
      <p>
        <b>&#8377; 320.00</b> <s>&#8377; 599.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/speaker_imgs/speaker2.jpg" alt="FORT Soundbar">
      <h3>FORT</h3>
      <p>S24 24W MINI SOUNDBAR</p>
      <p>
        <b>&#8377; 1899.00</b> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/speaker_imgs/speaker3.webp" alt="BOAT Stone 350">
      <h3>BOAT</h3>
      <p>Stone 350 10 W Bluetooth Speaker (Black, Mono Channel)</p>
      <p>
        <b>&#8377; 1699.00</b> <s>&#8377; 3490.00</s> 51% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
  </main>

  <main class="product-container">
    <div class="product">
      <img src="images/speaker_imgs/speaker4.jpg" alt="BOAT Stone 650R">
      <h3>BOAT</h3>
      <p>Stone 650R Wireless Bluetooth Portable Speaker with 10W Output, IPX5 water resistance</p>
      <p>
        <b>&#8377; 1599.00</b> <s>&#8377; 1804.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/speaker_imgs/speaker5.webp" alt="ZEBRONICS Zeb-Bellow">
      <h3>ZEBRONICS</h3>
      <p>Zeb-Bellow 3 Watt Truly Wireless Bluetooth Portable Speaker (Blue)</p>
      <p>
        <b>&#8377; 679.00</b> <s>&#8377; 895.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/speaker_imgs/speaker6.webp" alt="BOAT Stone 580">
      <h3>BOAT</h3>
      <p>Stone 580 Bluetooth Speaker with 12W RMS Stereo Sound, Up to 8 HRS Playtime, IPX4 12 W Speaker</p>
      <p>
        <b>&#8377; 2040.00</b> <s>&#8377; 4990.00</s> 59% off
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
      <img src="images/speaker_imgs/speaker7.jpg" alt="BOAT Stone 580">
      <h3>pTron</h3>
      <p>Newly Launched Fusion Hook v2 6W Bluetooth Speaker with 8 Hrs Playtime, 2.04" Neo Driver for Pristine Sound</p>
      <p>
        <b>&#8377; 499.00</b> <s>&#8377; 1499.00</s> 59% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
    <div class="product">
      <img src="images/speaker_imgs/speaker8.webp" alt="BOAT Stone 580">
      <h3>amazon basics</h3>
      <p>5W Bluetooth 5.3 Speaker, Upto 36 Hrs Playtime, True Wireless Technology</p>
      <p>
        <b>&#8377; 699.00</b> <s>&#8377; 1499.00</s> 59% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
    <div class="product">
      <img src="images/speaker_imgs/speaker9.webp" alt="BOAT Stone 580">
      <h3>Portronics</h3>
      <p>Apollo One 20W Wireless Bluetooth Portable Speaker with Wireless Karaoke Mic, 5 Hour Playtime, RGB LED Light,
        Bluetooth V5.3</p>
      <p>
        <b>&#8377; 1,199.00</b> <s>&#8377; 2499.00</s> 59% off
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