<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
  header("Location:loginform.html");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="shoppingcart_styles.css">
</head>

<body>

  <div class="container">
    <div class="user-profile">
      <?php

      $select_user = mysqli_query($conn, "SELECT * FROM `details` WHERE id='$user_id'") or die("query failed");

      if (mysqli_num_rows($select_user) > 0) {
        $fetch_user = mysqli_fetch_assoc($select_user);
      }

      ?>

      <p>username: <?php echo $fetch_user['firstname'] ?></p>

    </div>
  </div>

</body>

</html>