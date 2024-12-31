<?php
$insert = false;
echo "hello";
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
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $checkuser = "SELECT * from `details` where email = '$email'";
    $checkpass = "SELECT * from `details` where password = '$pass1'";
    $result = mysqli_query($con, $checkuser);
    $resultpass = mysqli_query($con, $checkpass);
    $count = mysqli_num_rows($result);
    $countpass = mysqli_num_rows($resultpass);
    if ($count > 0) {
        echo "<script>alert('user account already exists PLEASE LOGIN !!');window.location.href='loginform.html';</script>";
    } else if ($countpass > 0) {
        echo "<script>alert('password already taken !! USE ANOTHER PASSWORD');</script>";
    } else {
        $sql = "INSERT INTO `details` (`firstname`, `lastname`, `email`, `password`) VALUES ('$firname', '$lastname', '$email', '$pass1')";
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

<!DOCTYPE HTML>
<html>

<head>
    <title>SIGN-UP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        header {
            background: linear-gradient(-90deg, skyblue, white, skyblue);
            padding: 5px;
            color: darkblue;
            font-size: larger;
            width: 100%;
            height: 120px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: rgb(92, 167, 213);
            ;
            padding: 20px;
            width: 300%;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 20px;
            font-size: larger;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        nav a:hover {
            background-color: white;
            color: darkblue;
        }

        mark {
            background-color: white;
            color: black;
            padding: 20px;
        }

        body {
            background: rgb(255, 255, 255);
        }

        .container {
            margin: 10px;
            border-radius: 30px;
            width: 460px;
            border-left: 4px solid skyblue;
            border-right: 13px solid skyblue;
            height: 770px;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
            background: linear-gradient(-90deg, rgb(180, 222, 239), white, rgb(180, 222, 239));
            color: black;
            box-shadow: 0 0 40px rgba(0, 0, 0, .5);
        }

        form label {
            font-size: 18px;
            margin-top: 20px;
        }

        form input {
            width: 90%;
            height: 30px;
            font-size: medium;
            border-radius: 30px;
        }

        .second {
            background-color: rgb(163, 163, 170);
            border-radius: 10px;
            color: black;
            text-decoration: none;
        }

        small {
            color: rgb(70, 67, 67);
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .one {
            background-color: rgb(180, 222, 239);
            width: 50%;
            margin-left: 25%;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        }

        .one:hover {
            width: 40%;
            margin-left: 30%;
        }

        img {
            position: absolute;
            top: 89%;
            right: 40%;
        }

        form #pic {
            position: absolute;
            top: 108%;
            right: 41.5%;
        }

        h1 {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .container label {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        h3 a:hover {
            color: rgb(239, 107, 239);
        }

        header,
        .start {
            position: fixed;
            z-index: 5;
        }
    </style>
    <script>

        function checkpass() {
            let password1 = document.getElementById("pass1").value;
            let password2 = document.getElementById("pass2").value;
            if ((password1.length) < 5) {
                document.getElementById("msg").innerHTML = "Password should contain atleast 5 letters";
                document.getElementById("msgg").innerHTML = "";
                return false;
            }
            else if (password1 === password2) {
                document.getElementById("msgg").innerHTML = "Passwords Match!!";
                document.getElementById("msg").innerHTML = "";
                return true;
            }
            else if (password1 != password2) {
                document.getElementById("msg").innerHTML = "**Passwords don't match";
                document.getElementById("msgg").innerHTML = "";
                return false;
            }
        }

        function pass() {
            let password1 = document.getElementById("pass1").value;
            let password2 = document.getElementById("pass2").value;
            let emai = document.getElementById("emai").value;
            let firname = document.getElementById("firname").value;
            let lastname = document.getElementById("lastname").value;
            if (emai === "" || firname === "" || lastname === "") {
                alert("PLEASE FILL IN THE DETAILS");
            }
            else if (password1 === "" || password2 === "") {
                alert("PLEASE FILL THE PASSWORD");
            }
            else if ((password1.length) < 5) {
                alert("PASSWORD SHOULD CONTAIN MINIMUM 5 LETTERS");
            }
            else if (password1 != password2) {
                alert("!!!PASSWORDS DO NOT MATCH");
            }
        }
    </script>
</head>

<body>
    <header><br>
        <h1><u>GURU MOBILE ACCESSORIES</u> &amp; <u> ELECTRONICS</u></h1>
    </header><br><br><br><br><br><br>
    <div class="start">
        <nav>
            <a href="Homepage.html" target="_parent">HOME</a>
            <a href="appl.html" target="_self">APPLIANCES</a>
            <a href="about.html" target="_self">ABOUT</a>
            <a href="sign.html" target="_self"><mark>SIGN UP</mark></a>
        </nav>
    </div><br><br><br><br><br><br><br>
    <?php
    function call()
    {
        echo '<script>window.location.href="Homepage.html"</script>';
    }
    ?>
    <form onclick=" return checkpass()" action="sign.php" method="post">
        <div class="container">
            <br><br>
            <h1>
                <p align="center"><u>SIGN UP</u></p>
            </h1>
            <label for="firname"><br><br>&nbsp;FIRST NAME : </label><br><br>
            <input type="text" id="firname" name="firname" placeholder="  enter your first name"
                onmouseover="this.placeholder = ' '" ; onmouseout="this.placeholder = '  enter your first name'"
                required><br><br><br>
            <label for="lastname">&nbsp;LAST NAME : </label><br><br>
            <input type="text" id="lastname" name="lastname" placeholder="  enter your last name"
                onmouseover="this.placeholder = ' '" ; onmouseout="this.placeholder = '  enter your last name'"
                required><br><br><br>
            <label for="emai">&nbsp;E-MAIL : </label><br><br>
            <input type="email" id="emai" name="email" placeholder="  enter your email"
                onmouseover="this.placeholder = ' '" ; onmouseout="this.placeholder = '  enter your email'"
                required><br>
            <small id="firstone">&nbsp;We will never share your email with anyone</small><br><br><br>
            <label for="pass1">&nbsp;PASSWORD : </label><br><br>
            <input type="password" id="pass1" name="pass1" placeholder="  enter your password"
                onmouseover="this.placeholder = ' '" ; onmouseout="this.placeholder = '  enter your password'"
                required><br><br><br>
            <label for="pass2"> &nbsp;CONFIRM PASSWORD : </label><br><br>
            <input type="password" id="pass2" name="pass2" placeholder="  confirm your password"
                onmouseover="this.placeholder = ' '" ; onmouseout="this.placeholder = '  confirm your password'"
                required><br>
            <p id="msg" style="color: red; font-size: large;"></p>
            <p id="msgg" style="color: green; font-size: large;"></p>
            <br><br>
            <input type="submit" class="one" value="Submit" onclick="pass()"
                style="font-size:larger;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; cursor: pointer;">
        </div>
    </form>
    <br>
    <h3>
        <p align="center">Already have an account ? <a href="loginform.html">LOGIN</a></p>
    </h3><br><br>
</body>

</html>