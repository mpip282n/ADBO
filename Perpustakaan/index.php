<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Menampilkan Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak">
        <a href="add_anggota.php">tambah data</a>
        <table>
            <tr>
                <th>id_anggota</th>
                <th>nama_anggota</th>
                <th>no_identitas</th>
                <th>alamat</th>
                <th>telp</th>
                <th>tanggal_lahir</th>
            </tr>
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM anggota");

            while ($anggota = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td> <?= $anggota["id_anggota"] ?> </td>
                    <td> <?= $anggota["nama_anggota"] ?> </td>
                    <td> <?= $anggota["no_identitas"] ?> </td>
                    <td> <?= $anggota["alamat"] ?> </td>
                    <td> <?= $anggota["telp"] ?> </td>
                    <td> <?= $anggota["tanggal_lahir"] ?> </td>
                    <td> <a href="./edit_anggota.php?id=<?=$anggota['id_anggota'];?>">Edit</a>
                        <a onclick="return confirm('yakin hapus?..')"
                            href="./crud/delete.php?id=<?=$anggota['id_anggota'];?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>