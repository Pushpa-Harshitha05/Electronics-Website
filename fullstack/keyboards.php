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
  <title>KEYBOARD ELECTRONIC APPLIANCES</title>
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
    <h1>Keyboards</h1>
  </section>

  <main class="product-container">
    <div class="product">
      <img src="images/keyboard_imgs/keyboard1.webp" alt="EXQUISITE Keyboard">
      <h3>EXQUISITE</h3>
      <p>Wireless Keyboard Combo Warranty: 3 year</p>
      <p>
        <b>&#8377; 1,299.00</b> <s>&#8377; 1,999.00</s> INR*. In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/keyboard_imgs/keyboard2.webp" alt="FINGERS Keyboard">
      <h3>FINGERS</h3>
      <p>Velvet Combo C4 Warranty: 3 year</p>
      <p>
        <b>&#8377; 845.00</b> <s>&#8377; 1,999.00</s> Inclusive of all taxes INR* . In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/keyboard_imgs/keyboard3.webp" alt="Portronics keyboard">
      <h3>Portronics</h3>
      <p>Key5 Combo POR-1569 Wireless Laptop Keyboard (Grey)</p>
      <p>
        <b>&#8377; 899.00</b> <s>&#8377; 1,999.00</s> 55% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
  </main>

  <main class="product-container">
    <div class="product">
      <img src="images/keyboard_imgs/keyboard4.jpg" alt="AMAZON keyboard">
      <h3>AMAZON</h3>
      <p>Basics Wired Keyboard for Windows,USB 2.0 Interface, for PC, Computer, Laptop, Mac (Black)</p>
      <p>
        Rs.<b>&#8377; 499.00</b> Inclusive of all taxes INR* In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/keyboard_imgs/keyboard5.jpg" alt="RAPOO keyboard">
      <h3>RAPOO</h3>
      <p>V500 Pro Mechanical Gaming Keyboard Cyan Blue</p>
      <p>
        <b>&#8377; 799.00</b> INR* In stock
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/keyboard_imgs/keyboard6.webp" alt="Portronics keyboard">
      <h3>Portronics</h3>
      <p>Bubble Max Sleek Wireless, Silent Keys, Auto Sleep Mode, 2.4Ghz + Wireless Laptop Keyboard (Green)</p>
      <p>
        <b>&#8377; 753.00</b> <s>&#8377; 1,299.00</s> 42% off INR*
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
      <img src="images/keyboard_imgs/keyboard7.webp" alt="HP keyboard">
      <h3>HP</h3>
      <p>K100 Wired Keyboard, Quick, Comfy and Accurate, USB Plug & Play Setup,LED Indicators</p>
      <p>
        <b>&#8377; 599.00</b> <s>&#8377; 1250.00</s> 52% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>
    <div class="product">
      <img src="images/keyboard_imgs/keyboard8.webp" alt="ZEBRONICS">
      <h3>ZEBRONICS</h3>
      <p>K36 Wired USB Keyboard with 106 Keys, Slim Design, Smartphone Holder, Retractable Stand, 1.2m Cable Length,
        Rupee Key</p>
      <p>
        <b>&#8377; 268.00</b> <s>&#8377; 499.00</s> 46% off
      </p>
      <div class="checkoutbtns">
        <button class="btnsubmit">Buy Now</button>
        <button class="btnsubmit">Add To Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="images/keyboard_imgs/keyboard9.webp" alt="ZEBRONICS">
      <h3>ZEBRONICS</h3>
      <p>Trion USB Gaming Keyboard & Mouse Gaming Combo, 104 Keys Backlit, Translucent Material, Multi Color LED, Multi
        DPI Modes</p>
      <p>
        <b>&#8377; 1,199.00</b> <s>&#8377; 598.00</s> INR*. In stock
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