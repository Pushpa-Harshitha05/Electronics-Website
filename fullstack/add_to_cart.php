<?php

$conn = mysqli_connect('localhost', 'root', '', 'signup');
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if (!$user_id) {
  header("Location:loginform.html");
} else {

}

?>