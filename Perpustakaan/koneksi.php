<?php
/* Membuat Koneksi dengan MySQL */
$koneksi = mysqli_connect("localhost", "root", "", "perpustakaan");

/* Periksa Koneksi, Jika Tidak Terkoneksi maka Tampilkan Pesan Gagal */
if (!$koneksi) {
    echo "<script>alert('koneksi database gagal');</script>";
}
?>