<?php
session_start();
include "functions.php";

if (isset($_POST["login"])) {
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
    mysqli_num_rows($result);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
        exit;
    } else {
        echo "
            <script>
                alert('Username/Password tidak sesuai!');
            </script>
        ";
    }

}
// if (isset($_SESSION["login"])) {
//     header("Location: index.html");
//     exit;
// }

// require 'functions.php';

// if (isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

//     // cek username
//     if (mysqli_num_rows($result) === 1)  {

//         // cek password
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row["password"])) {

//             // set session
//             // $_SESSION["login"] = true;
//             header("Location: index.html");
//             exit;
//         }
//     }

//     $error = true;
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In | Prakergo</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="background">
        <video autoplay loop muted>
            <source src="video/bg_login.mp4">
        </video>
    </div>

    <div class="form">
        <div class="judul">
            <h1>MASUK KE PRAKERGO</h1>
        </div>

        <form action="" method="post">
            <div class="form-username">
                <label for="username">
                    <h2>Username</h2>
                </label>
                <input type="text" id="username" name="username" placeholder="Masukan Username...">
            </div>
            <div class="form-password">
                <label for="password">
                    <h2>Password</h2>
                </label>
                <input type="password" id="password" name="password" placeholder="Masukan Password...">
            </div>
            <div class="link">
                <a href="#">Lupa Password?</a>
                <a href="registrasi.php">Daftar?</a>
            </div>
            <div class="tombol">
                <button class="button" id="button" name="login" type="submit">Log In</button>
            </div>
        </form>
        <div class="footer">
            <p>Copyright 2022 &copy; Joshua Nathanael Zega. All rights reserved.</p>
        </div>
    </div>

</body>

</html>