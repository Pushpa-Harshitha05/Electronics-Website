<!DOCTYPE HTML>
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
  <title>Electronic shopping site</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="myprofile_style.css">
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
      <a href="Homepage.php" target="_parent"><mark>Home</mark></a>
      <a href="appl.php" target="_self">Appliances</a>
      <a href="about.php" target="_self">About</a>
      <a href="#footer" target="_self">Contact us</a>
    </nav>
  </div>

  <main class="main-container">
    <div class="profilediv">
      <img src="images/profile_imgs/order.png" alt="Your Orders">
      <div class="data">
        <span>Your Orders</span>
        <p>Check your orders here and buy them again</p>
      </div>
    </div>
    <div class="profilediv">
      <img src="images/profile_imgs/cart.png" alt="Your Cart">
      <div class="data">
        <span>Your Cart</span>
        <p>Check the items in the cart and order them.</p>
      </div>
    </div>
    <div class="profilediv">
      <img src="images/profile_imgs/address.png" alt="Your Addresses">
      <div class="data">
        <span>Your Addresses</span>
        <p>Edit your Address or add new ones for orders.</p>
      </div>
    </div>
    <div class="profilediv">
      <img src="images/profile_imgs/login_security.png" alt="Login & Security">
      <div class="data">
        <span>Login & Security</span>
        <p>Edit your profile, name, email and password.</p>
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

  <script src="homepage_script.js"></script>
</body>

</html>