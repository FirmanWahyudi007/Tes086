<?php
$konek = mysqli_connect("172.23.0.2", "root", "rootpassword", "cucisepatu");

if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
error_reporting(0);
// echo "Koneksi Berhasil";
