<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   echo "empty";
}

?>

<!DOCTYPE HTML>
<html>

<head>
   <title>Electronic shopping site</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="homepage_style.css">
</head>

<body>
   <header><BR>
      <div class="logo">
         <p><u>Guru Mobile Accessories</u> &amp; <u> Electronics</u></p>
      </div>
      <?php

      $select_user = mysqli_query($conn, "SELECT * FROM `details` WHERE id='$user_id'") or die("query failed");

      if (mysqli_num_rows($select_user) > 0) {
         $fetch_user = mysqli_fetch_assoc($select_user);
      }

      ?>

      <div class="profile">
         <img src="images/homepage_imgs/profile_img.png" alt="profile" id="profileimg">
      </div>

   </header><br><br><br><br><br><br>
   <div class="start">
      <nav>
         <a href="#" target="_parent"><mark>Home</mark></a>
         <a href="appl.html" target="_self">Appliances</a>
         <a href="about.html" target="_self">About</a>
         <a href="sign.html" target="_self">Sign Up</a>
      </nav>
   </div>
   <div class="total">
      <h3 align="center">Welcome to Guru Mobile Accessories &amp; Electronics</h3>
      <p align="center"><input type="search" id="select" list="items" placeholder="search for products">
         <datalist id="items">
            <option>mouse</option>
            <option>keyboards</option>
            <option>screencards</option>
            <option>speakers</option>
            <option>pendrives</option>
         </datalist>
         <input type="image" src="images/homepage_imgs/search_img.png" id="btn" onclick="search()">
      </p>
      <br><br>
      <marquee behaviour="alternate" scrollamount="20" onmouseover="this.stop()" onmouseout="this.start()">
         <div class="row">
            <img id="pict" src="images/homepage_imgs/scroll_img1.jpg">
         </div>
         <div class="row">
            <img id="pict" src="images/homepage_imgs/scroll_img2.jpeg">
         </div>
         <div class="row">
            <img id="pict" src="images/homepage_imgs/scroll_img3.jpg">
         </div>
      </marquee>
      <br><br>
      <div class="column">
         <img id="pic" src="images/homepage_imgs/sale1.jpg">
         <p>LOWEST&nbsp;AND&nbsp;AFFORDABLE&nbsp;PRICES</p><br><br><br>
      </div>
      <div class="column">
         <img id="pic" src="images/homepage_imgs/sale2.jpg">
         <p>BEST&nbsp;OF&nbsp;ELECTRONIC&nbsp;GOODS</p><br><br><br>
      </div>
      <br><br>
      <u>
         <p class="heading">ELECTRONIC&nbsp;APPLIANCES&nbsp;FROM&nbsp;VARIOUS&nbsp;BRANDS</p>
      </u><br>
      <div class="links">
         <div class="second">
            <a href="mouse.html"><img id="pic" src="images/mouse_imgs/mouse1.jpeg"></a>
         </div>
         <div class="second">
            <a href="pendrives.html"><img id="pic" src="images/pendrive_imgs/pendrive5.jpg"></a>
         </div>
         <div class="second">
            <a href="keyboards.html"><img id="pic" src="images/homepage_imgs/keyboard_img.png"
                  style="background-color: white;"></a>
         </div>
         <div class="second">
            <a href="screencards.html"><img id="pic" src="images/screencard_imgs/screen1.jpeg"></a>
         </div>
      </div>
      <div class="column last">
         <div class="columnpic">
            <img src="images/homepage_imgs/phones_img.jpg">
         </div>
         <div>
            <p>
               ALL KIND OF MOBILE
               ACCESSORIES AND ELECTRONIC APPLIANCES AVAILABLE</p>
         </div>
      </div>
      <br>
      <div class="signin">
         <p align="center"><a href="sign.html">SIGN IN</a><br>For Better Experience</p>
      </div>
   </div>
   <footer>
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