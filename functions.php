<?php
$conn = mysqli_connect("localhost", "root", "", "prakergo");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $tanggal = ($data["tanggal"]);
    $waktu = ($data["waktu"]);
    $lokasiPrakerin = htmlspecialchars($data["lokasiPrakerin"]);
    $kegiatan = htmlspecialchars($data["kegiatan"]);

    $query = "INSERT INTO prakerin VALUES ('', '$tanggal', '$waktu', '$lokasiPrakerin', '$kegiatan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM prakerin WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 =
        mysqli_real_escape_string($conn, $data["password2"]);
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $nis = htmlspecialchars($data["nis"]);
    $jenisKelamin = ($data["jenisKelamin"]);
    $tanggalLahir = ($data["tanggalLahir"]);
    $sekolah = htmlspecialchars($data["sekolah"]);


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username telah digunakan, buat username baru');
            </script>";
        return false;
    }
    if ($password !== $password2) {
        echo "<script>
                alert('password tidak sesuai, silahkan ketik ulang!');
            </script>";
        return false;
    }
    // $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$namaLengkap', '$nis', '$jenisKelamin', '$tanggalLahir', '$sekolah')");
    return mysqli_affected_rows($conn);
}
