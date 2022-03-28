<?php
include 'functions.php';
include 'session.php';
$prakerin = query("SELECT * FROM user"); 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Diri | Prakergo</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="background">
        <video autoplay loop muted>
            <source src="video/bg_login.mp4">
        </video>
    </div>

    <div class="form">
        <div class="judul">
            <h1>Selamat datang, [nama]</h1>
        </div>
        <div class="bodyHeader">
            <a href="index.php">
                <button>Home</button>
            </a>
            <a href="prakerin.php">
                <button>Catatan Perjalanan</button>
            </a>
            <a href="tambah.php">
                <button>Tambah Catatan</button>
            </a>
            <a href="ubah.php">
                <button>Ubah Data Diri</button>
            </a>
        </div>
        <div class="body">

        </div>
    </div>
</body>

</html>