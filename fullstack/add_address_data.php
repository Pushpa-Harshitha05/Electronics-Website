<?php

function redirect()
{
  header("Location:address.php");
}

$server = "localhost";
$username = "root";
$password = "";

$db_name = "signup";

$conn = mysqli_connect($server, $username, $password, $db_name);
session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!$conn) {
    die("connection failed due to" . mysqli_connect_error());
  }

  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];

  $checkaddress = mysqli_query($conn, "SELECT * FROM `addresses` WHERE address_name = '$fullname' AND phone_no = '$phone' AND street = '$address' AND city = '$city' AND state = '$state'");

  if (mysqli_num_rows($checkaddress) > 0) {
    echo "<script>Address Already exists.</script>";
  } else {
    $insertaddress = mysqli_query($conn, "INSERT INTO `addresses` (user_id,address_name,phone_no,street,city,state) VALUES ('$user_id','$fullname','$phone','$address','$city','$state')");

    if ($conn->query($insertaddress) == true) {
      echo "<script>alert('Address added successfully.')</script>";
      // echo "<script>window.location.href = 'address.php'</script>";
      redirect();
    } else {
      echo "ERROR: $sql <br> $conn->error";
    }
  }
}

?>