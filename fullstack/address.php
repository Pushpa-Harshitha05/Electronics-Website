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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Addresses - Guru Mobile Accessories & Electronics</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="appl_style.css">
  <link rel="stylesheet" href="addrStyle.css">
</head>

<body>

  <header><BR>
    <div class="logo">
      <p><u>Guru Mobile Accessories</u> &amp; <u> Electronics</u></p>
    </div>
    <?php if ($user_id && $fetch_user): ?>
      <div class="profile">
        <div class="cartitems">
          <a href="shopping_cart.php" class="cartlink">
            <img src="images/homepage_imgs/cart.png" alt="cart" id="cart">
            <span id="cartcount">
              <?php
              $cartres = mysqli_query($conn, "SELECT user_cart FROM `details` WHERE id = '$user_id'");
              $rowcount = mysqli_fetch_assoc($cartres);
              if ($rowcount) {
                echo $rowcount['user_cart'];
              }
              ?>
            </span>
          </a>
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
      <a href="appl.php" target="_self">Appliances</a>
      <a href="about.php" target="_self"><mark>About</mark></a>
      <a href="#footer" target="_self">Contact us</a>
    </nav>
  </div>

  <main class="addr-content">
    <div class="addr-display add-addr">
      <img src="images/profile_imgs/plus.png" alt="">
      <p>Add address</p>
    </div>
    <?php

    $getaddress = mysqli_query($conn, "SELECT * FROM `addresses` WHERE user_id = '$user_id'");
    $result = mysqli_query($conn, "SELECT firstname FROM `details` WHERE id='$user_id'");
    if ($row = mysqli_fetch_assoc($result)) {
      $user_name = $row['firstname'];
    }
    if (mysqli_num_rows($getaddress) > 0) {
      while ($addr_row = mysqli_fetch_assoc($getaddress)) {
        ?>

        <div class="addr-display">
          <p> <?php echo $user_name; ?></p>
          <p>Phone Number: <?php echo $addr_row['phone_no'] ?></p>
          <p>Street: <?php echo $addr_row['street'] ?></p>
          <p>City: <?php echo $addr_row['city'] ?></p>
          <p>State: <?php echo $addr_row['state'] ?></p>
          <div>
            <buttton class="removebtn">Remove</buttton>
          </div>
        </div>


        <?php
      }
    } else {
      echo "<p id='no-addr'>No addresses found.</p>";
    }

    ?>
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

  <script type="module" src="homepage_script.js"></script>
</body>

</html>