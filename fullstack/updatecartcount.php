<?php
$cartres = mysqli_query($conn, "SELECT user_cart FROM `details` WHERE id = '$user_id'");
$rowcount = mysqli_fetch_assoc($cartres);
if ($rowcount) {
  echo $rowcount['user_cart'];
}
?>