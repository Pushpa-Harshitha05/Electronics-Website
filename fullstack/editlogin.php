<!DOCTYPE html>
<html lang="en">

<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($user_id != null) {

  $select_user = mysqli_query($conn, "SELECT * FROM `details` WHERE id='$user_id'");

  if (mysqli_num_rows($select_user) > 0) {
    $fetch_user = mysqli_fetch_assoc($select_user);
  } else {
    $fetch_user = null;
  }

}

?>

<head>
  <title>Edit Login Details</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="editlogin_styles.css">
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
            <a href="myprofile.php"><?php echo $fetch_user['firstname'] ?></a>
            <hr>
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
      <a href="about.php" target="_self">About</a>
      <a href="#footer" target="_self">Contact us</a>
    </nav>
  </div>


  <main class="editDetails">

    <!-- Edit Username -->
    <form method="POST" action="update_user.php">
      <div class="edit editName">
        <div class="display">
          <p>Username</p>
          <input type="text" name="new_username" value="<?php echo $fetch_user['firstname']; ?>">
        </div>
        <button type="submit" name="edit_username" class="button">Edit</button>
      </div>
    </form>

    <!-- Edit Email -->
    <form method="POST" action="update_user.php">
      <div class="edit editEmail">
        <div class="display">
          <p>E-mail</p>
          <input type="email" name="new_email" value="<?php echo $fetch_user['email']; ?>">
        </div>
        <button type="submit" name="edit_email" class="button">Edit</button>
      </div>
    </form>

    <!-- Edit Password -->
    <form method="POST" action="update_user.php">
      <div class="edit editPassword">
        <div class="display">
          <p>Password</p>
          <input type="text" name="new_password" value="<?php echo $fetch_user['password']; ?>">
        </div>
        <button type="submit" name="edit_password" class="button">Edit</button>
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


  <script src="homepage_script.js"></script>
</body>

</html>