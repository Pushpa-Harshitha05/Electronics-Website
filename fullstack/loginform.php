<?php
$insert = false;

if (isset($_POST['email']) && isset($_POST['password'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "signup";

    // Connect to the database
    $con = mysqli_connect($server, $username, $password, $db_name);

    // Check connection
    if (!$con) {
        die("Connection failed due to: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass1 = mysqli_real_escape_string($con, $_POST['password']);

    // SQL query to check user
    $checkuser = "SELECT * FROM `details` WHERE email = '$email' AND password = '$pass1'";
    $result = mysqli_query($con, $checkuser);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        echo "<script>alert('SUCCESSFULLY LOGGED IN !!');</script>";
        echo "<script>window.location.href='Homepage.html';</script>";
    } else {
        echo "<script>alert('INCORRECT EMAIL OR PASSWORD');</script>";
        echo "<script>window.location.href='loginform.html';</script>";
    }

    // Close connection
    mysqli_close($con);
}
?>