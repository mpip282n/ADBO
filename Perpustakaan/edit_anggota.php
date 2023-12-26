<!DOCTYPE html>
<html lang="en">

<head>
    <title>form Anggota</title>
    <link rel="stylesheet" href="./style.css">
    <title>Edit Anggota</title>
</head>

<body>
    <div class="kotak">
        <h1>Edit Anggota</h1>

        <?php
        include "./koneksi.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM anggota WHERE id_anggota=$id";

        $result = mysqli_query($koneksi, $query);
        while ($data = mysqli_fetch_array($result)) {

            ?>
            <form action="./crud/update.php" method="post">
                <label for="id_anggota">id_anggota</label>
                <input type="text" name="id_anggota" value="<?= $data['id_anggota']; ?>" maxlength="100" class="form-input"
                    required>

                <label for="nama_anggota">nama_anggota</label>
                <input type="text" name="nama_anggota" value="<?= $data['nama_anggota']; ?>" maxlength="100"
                    class="form-input" required>

                <label for="no_identitas">no_identitas</label>
                <input type="text" name="no_identitas" value="<?= $data['no_identitas']; ?>" maxlength="100"
                    class="form-input" required>

                <label for="alamat">alamat</label>
                <input type="text" name="alamat" value="<?= $data['alamat']; ?>" maxlength="100" class="form-input"
                    required>

                <label for="telp">telp</label>
                <input type="number" name="telp" value="<?= $data['telp']; ?>" maxlength="100" class="form-input" required>

                <label for="tanggal_lahir">tanggal_lahir</label>
                <input type="date" name="tanggal_lahir" value="<?= $data['tanggal_lahir']; ?>" maxlength="100"
                    class="form-input" required>

                <input type="hidden" name="id" value="<?= $data['id_anggota']; ?>">

                <button type="submit" id="btn-kirim">kirim</button>
            </form>

        <?php } ?>
        <a href="./index.php">Lihat data anggota</a>
    </div>
</body>

</html>