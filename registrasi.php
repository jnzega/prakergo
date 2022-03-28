<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "
            <script>
                alert('Registrasi Berhasil!');
                document.location.href = 'login.php';
            </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar | Prakergo</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div class="background">
    <video autoplay loop muted>
        <source src="video/bg_login.mp4">
    </video>
</div>

    <div class="form">
        <div class="judul">`
            <h1>REGISTER TO PEDULI DIRI</h1>
        </div>
        <form action="" method="post">
            <div class="biodata">
                <div class="namaLengkap">
                    <label for="namaLengkap">
                        <h2>Nama Lengkap</h2>
                    </label>
                    <input type="text" id="namaLengkap" name="namaLengkap" placeholder="Masukan nama lengkap...">
                </div>
                <div class="nis">
                    <label for="nis">
                        <h2>Nomor Induk Siswa</h2>
                    </label>
                    <input type="text" id="nis" name="nis" placeholder="Masukan Nomor Induk Siswa...">
                </div>
                <div class="jenisKelamin">
                    <h2>Jenis Kelamin</h2>
                    <div class="lakiLaki">
                        <input type="radio" name="jenisKelamin" id="lakiLaki" value="lakiLaki">
                        <label for="lakiLaki">Laki-laki</label>
                    </div>
                    <div class="perempuan">
                        <input type="radio" name="jenisKelamin" id="perempuan" value="perempuan">
                        <label for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="tanggalLahir">
                    <label for="tanggalLahir"><h2>Tanggal Lahir</h2></label>
                    <input type="date" name="tanggalLahir" id="tanggalLahir">
                </div>
                <div class="sekolah">
                    <label for="sekolah">
                        <h2>Sekolah</h2>
                    </label>
                    <input type="text" id="sekolah" name="sekolah" placeholder="Masukan sekolah...">
                </div>
            </div>
            <div class="username-password">
                <div class="username">
                    <label for="username">
                        <h2>Nama Pengguna</h2>
                    </label>
                    <input type="text" name="username" id="username" placeholder="Masukan nama pengguna...">
                </div>
                <div class="password">
                    <label for="password">
                        <h2>Kata Sandi</h2>
                    </label>
                    <input type="password" name="password" id="password" placeholder="Masukan sandi baru...">
                </div>
                <div class="password2">
                    <label for="password2">
                        <h2>Verifikasi Sandi</h2>
                    </label>
                    <input type="password" name="password2" id="password2" placeholder="Masukan ulang kata sandi...">
                </div>
            </div>
            <div class="foto">

            </div>
            <div class="tombol">
                <button name="register" type="submit">Daftar!</button>
            </div>
        </form>
    </div>


</body>
</html>