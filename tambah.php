<?php

include 'functions.php';
include 'session.php';
$prakerin = query("SELECT * FROM user");
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'prakerin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'prakerin.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah | Prakergo</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .tombol {
            padding-top: 20px;
        }

        .tombol button {
            height: 35px;
            width: 200px;
            color: white;
            background-color: black;
            border-radius: 50px;
            cursor: pointer;
        }

        form {
            width: 600px;
            padding: 50px;
        }

        input[type=text] {
            width: 100%;
            border-radius: 50px;
            height: 40px;
            padding: 10px;
            border: 2px solid grey;
        }

        input[type=date] {
            width: 100%;
            border-radius: 50px;
            height: 40px;
            padding: 10px;
            border: 2px solid grey;
        }

        input[type=time] {
            width: 100%;
            border-radius: 50px;
            height: 40px;
            padding: 10px;
            border: 2px solid grey;
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
            <form action="" method="post">
                <div class="tanggal">
                    <label for="tanggal">
                        <h2>Tanggal</h2>
                    </label>
                    <input type="date" id="tanggal" name="tanggal">
                </div>
                <div class="waktu">
                    <label for="waktu">
                        <h2>Waktu</h2>
                    </label>
                    <input type="time" id="waktu" name="waktu">
                </div>
                <div class="lokasiPrakerin">
                    <label for="lokasiPrakerin">
                        <h2>Lokasi Prakerin</h2>
                    </label>
                    <input type="text" id="lokasiPrakerin" name="lokasiPrakerin" placeholder="Masukan Lokasi Prakerin...">
                </div>
                <div class="kegiatan">
                    <label for="kegiatan">
                        <h2>Kegiatan</h2>
                    </label>
                    <input type="text" id="kegiatan" name="kegiatan" placeholder="Masukan Kegiatan...">
                </div>
                <div class="tombol">
                    <button type="submit" name="submit">Tambah!</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>