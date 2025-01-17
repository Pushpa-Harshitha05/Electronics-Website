<?php
$insert = false;

function call()
{
    header("Location:Homepage.php");
}

if (isset($_POST['firname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $db_name = "signup";

    $con = mysqli_connect($server, $username, $password, $db_name);

    if (!$con) {
        die("connection failed due to" . mysqli_connect_error());
    }

    $firname = $_POST['firname'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $checkuser = "SELECT * from `details` where email = '$email'";
    $checkpass = "SELECT * from `details` where password = '$pass1'";
    $result = mysqli_query($con, $checkuser);
    $resultpass = mysqli_query($con, $checkpass);
    $count = mysqli_num_rows($result);
    $countpass = mysqli_num_rows($resultpass);
    if ($count > 0 and ($countpass == 0)) {
        echo "<script>alert('user email already exists PLEASE LOGIN !!');window.location.href='loginform.html';</script>";
    } else if ($count > 0) {
        echo "<script>alert('user account already exists PLEASE LOGIN !!');window.location.href='loginform.html';</script>";
    } else if ($countpass > 0) {
        echo "<script>alert('password already taken !! USE ANOTHER PASSWORD');window.location.href='sign.html';</script>";
    } else {
        $sql = "INSERT INTO `details` (`firstname`, `email`, `password`) VALUES ('$firname', '$email', '$pass1')";
        if ($con->query($sql) == true) {
            echo "<style>body{background-color:skyblue;}</style>";
            echo "<script type='text/javascript'>";
            echo "alert('SUCCESSFULLY SIGNED UP !!');";
            echo "</script>";
            call();
        } else {
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
    }
}
?>