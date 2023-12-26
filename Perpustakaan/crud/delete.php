<?php
include '../koneksi.php';

$id_anggota = $_GET['id'];

$terhapus = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota=$id_anggota");

if($terhapus) {
    echo "<script>alert('data berhasil terhapus')</script>";
    echo "<script>window.location= '../index.php'</script>";

    //header("Location: ../index.php");
} else{
    echo "<script>alert('data gagal terhapus')</script>";
    echo "<script>window.location= '../index.php'</script>";
}

?>