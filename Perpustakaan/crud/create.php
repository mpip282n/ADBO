<?php
include '../koneksi.php';

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$nama_identitas = $_POST['no_identitas'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$tanggal_lahir = $_POST['tanggal_lahir'];

/* Mendifinisikan Query */
$query = "INSERT INTO anggota(id_anggota, nama_anggota, no_identitas, alamat, telp, tanggal_lahir) VALUES('$id_anggota', '$nama_anggota', '$no_identitas', '$alamat', '$telp', '$tanggal_lahir')";

/* Mengeksekusi Query */
mysqli_query($koneksi, $query);

/* Kembali ke Halaman index.php */
header("Location: ../index.php");

exit;

?>