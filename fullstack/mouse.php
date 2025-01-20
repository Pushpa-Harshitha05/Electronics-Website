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
  <title>MOUSE ELECTRONIC APPLIANCES</title>
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
    <h1>Mouse Appliances</h1>
  </section>

  <main class="product-container">
    <div class="product">
      <img src="images/mouse_imgs/mouse1.jpeg" alt="DELL Wireless Mouse">
      <h3>DELL</h3>
      <p>company's Full Size Wireless Mouse,High resolution 1600 DPI</p>
      <p>
        <b>&#8377;&nbsp; 727.00</b> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">

      <img src="images/mouse_imgs/mouse2.jpg" alt="ENTWINO Gaming Mouse">
      <h3>ENTWINO</h3>
      <p>USB Wired Gaming Mouse D1 ,LED Backlight up to 3200 DPI, Ergonomic Design for Laptop</p>
      <p>
        <b>&#8377;&nbsp;229.00</b> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/mouse_imgs/mouse3.webp" alt="ZEBRONICS Mouse">
      <h3>ZEBRONICS</h3>
      <p>Zeb-Jaguar Wireless Optical Mouse (2.4GHz Wireless, Black), Special price</p>
      <p>
        <b>&#8377; 399.00</b> <s>&#8377; 1,190.00</s> 66% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
  </main>

  <main class="product-container">
    <div class="product">
      <img src="images/mouse_imgs/mouse4.jpeg" alt="LOGITECH Wired Mouse">
      <h3>LOGITECH</h3>
      <p>Buy Logitech M90 Wired Mouse Online at<br> Best Price .</p>
      <p>
        <b>&#8377; 385.00</b> <s>&#8377; 425.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/mouse_imgs/mouse5.png" alt="CROMA Optical Mouse">
      <h3>CROMA</h3>
      <p>Buy Croma XM5109 Rechargeable Wireless Optical Mouse (1600 DPI Adjustable)</p>
      <p>
        <b>&#8377; 600.00</b> <s>&#8377; 725.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/mouse_imgs/mouse6.png" alt="HP Wired Mouse">
      <h3>HP</h3>
      <p>1000 Wired Optical Mouse (USB 3.0, USB 2.0, Black)</p>
      <p>
        <b>&#8377; 329.00</b> <s>&#8377; 399.00</s> 17% off
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
      <img src="images/mouse_imgs/mouse7.jpg" alt="EVOFOX Gaming Mouse">
      <h3>EvoFox</h3>
      <p>Starter Series Spectre USB Wired Gaming Mouse with Upto 3600 DPI Gaming Sensor | 6 Buttons Design</p>
      <p>
        <b>&#8377; 299.00</b> <s>&#8377; 799.00</s> 63% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
    <div class="product">
      <img src="images/mouse_imgs/mouse8.webp" alt="amazon basics">
      <h3>amazon basics</h3>
      <p>2.4GHz Wireless + Bluetooth 5.1 Mouse, Multi-Device Dual Mode Slim Rechargeable Silent Click Buttons</p>
      <p>
        <b>&#8377; 549.00</b> <s>&#8377; 1099.00</s> 50% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
    <div class="product">
      <img src="images/mouse_imgs/mouse9.webp" alt="BOAT Stone 580">
      <h3>ZEBRONICS</h3>
      <p>Zeb-Jaguar Wireless Mouse, 2.4GHz with USB Nano Receiver, High Precision Optical Tracking, 4 Buttons, Plug &
        Play</p>
      <p>
        <b>&#8377; 299.00</b> <s>&#8377; 1190.00</s> 75% off
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