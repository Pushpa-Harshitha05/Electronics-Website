<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($user_id != null) {

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['edit_username'])) {

      $new_username = mysqli_real_escape_string($conn, $_POST['new_username']);
      mysqli_query($conn, "UPDATE `details` SET firstname='$new_username' WHERE id='$user_id'");

    }

    if (isset($_POST['edit_email'])) {

      $new_email = mysqli_real_escape_string($conn, $_POST['new_email']);
      $result = mysqli_query($conn, "SELECT * FROM `details` WHERE email='$new_email'");
      if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('email already exists')</script>";
      } else {
        mysqli_query($conn, "UPDATE `details` SET email='$new_email' WHERE id='$user_id'");
      }

    }

    if (isset($_POST['edit_password'])) {

      $new_password = $_POST['new_password'];
      mysqli_query($conn, "UPDATE `details` SET password='$new_password' WHERE id='$user_id'");

    }

    echo "<script>window.location.href = 'editlogin.php'</script>";
    exit();

  }

}

?>