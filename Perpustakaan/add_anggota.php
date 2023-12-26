<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Anggota</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="kotak">
        <h1>Form Anggota</h1>
        <form action="./crud/create.php" method="post">
            <label for="id_anggota">id_anggota</label>
            <input type="id_anggota" name="id_anggota" maxlength="100" class="form-input" required>

            <label for="nama_anggota">nama_anggota</label>
            <input type="text" name="nama_anggota" maxlength="100" class="form-input" required>

            <label for="no_identitas">no_identitas</label>
            <input type="text" name="no_identitas" maxlength="100" class="form-input" required>

            <label for="alamat">alamat</label>
            <input type="text" name="alamat" maxlength="100" class="form-input" required>

            <label for="telp">telp</label>
            <input type="text" name="telp" maxlength="100" class="form-input" required>

            <label for="tanggal_lahir">tanggal_lahir</label>
            <input type="date" name="tanggal_lahir" maxlength="100" class="form-input" required>

            <button type="submit" id="btn-kirim">kirim</button>
        </form>
        <a href="./index.php">Lihat data anggota</a>
    </div>
</body>

</html>