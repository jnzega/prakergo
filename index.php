<?php

// session_start();

// if (!isset($_SESSION["login"])) {
//     header("Location: login.php");
//     exit;
// }


include 'functions.php';
include 'session.php';
$prakerin = query("SELECT * FROM user");

// tombol cari ditekan
// if (isset($_POST["cari"])) {
//     $prakerin = cari($_POST["keyword"]);
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prakergo</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .body {
            display: flex;
        }

        .profil {
            padding: 50px;
            display: flex;
        }

        .gambar {
            border: 2px solid black;
            width: 250px;
            height: 250px;
        }

        table {
            font-weight: bold;
            padding-left: 20px;
            font-size: x-large;
        }
    </style>
</head>

<body>
    <div class="background">
        <video autoplay loop muted>
            <source src="video/bg_login.mp4">
        </video>
    </div>

    <div class="form">
        <div class="judul">
            <h1>Selamat datang, <?= $_SESSION['username']; ?></h1>
        </div>
        <div class="bodyHeader">
            <a href="index.php">
                <button>Home</button>
            </a>
            <a href="prakerin.php">
                <button>Catatan Prakerin</button>
            </a>
            <a href="tambah.php">
                <button>Tambah Catatan</button>
            </a>
            <a href="ubah.php">
                <button>Ubah Data Diri</button>
            </a>
        </div>
        <div class="body">
            <div class="profil">
                <div class="gambar">

                </div>
                <div class="tabel">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>: [Nama]</td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>: [nis]</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: [Kelamin]</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: [tanggal lahit]</td>
                        </tr>
                        <tr>
                            <td>Sekolah</td>
                            <td>: [Sekolah]</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>