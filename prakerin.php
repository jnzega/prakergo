<?php

                // session_start();

                // if (!isset($_SESSION["login"])) {
                //     header("Location: login.php");
                //     exit;
                // }


                include 'functions.php';
                include 'session.php';
                $prakerin = query("SELECT * FROM prakerin");

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
    <title>Catatan Prakerin | Prakergo</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        table {
            width: 91%;
            height: 95%;
            background: lightgrey;
            margin-left: 50px;
            text-align: center;
        }

        th {
            background-color: darkgrey;
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
            <h1>Selamat datang, [nama]</h1>
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
            <table>

                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Kegiatan</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($prakerin as $row) { ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["tanggal"]; ?></td>
                        <td><?= $row["waktu"]; ?></td>
                        <td><?= $row["lokasiPrakerin"]; ?></td>
                        <td><?= $row["kegiatan"]; ?></td>
                        <td>
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Yakin gan mau dihapus ini datanya?')">hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php } ?>



            </table>
        </div>
    </div>
</body>

</html>