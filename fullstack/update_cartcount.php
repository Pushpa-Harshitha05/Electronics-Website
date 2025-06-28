<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

if (!$conn) {
  die("connection failed");
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($user_id) {
  $query = mysqli_query($conn, "SELECT user_cart FROM `details` WHERE id = '$user_id'");
  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    return $row['user_cart'];
  } else {
    return 0;
  }
}

?>