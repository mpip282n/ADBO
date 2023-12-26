<?php
include "../koneksi.php";
$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$nama_identitas = $_POST['no_identitas'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$query = "UPDATE anggota SET nama_anggota='$nama_anggota', no_identitas='$no_identitas', alamat='$alamat', telp='$telp', tanggal_lahir='$tanggal_lahir WHERE id_anggota=$id_anggota";

$success = mysqli_query($koneksi, $query);

if($success){
    // jika berhasil navigasi ke halaman utama
    header("Location: ../index.php");
} else{
    // jika gagal menampilkan alert (notifikasi gagal)
    echo "<script> alert('Gagal memperbaharui data anggota'); </script>";
}