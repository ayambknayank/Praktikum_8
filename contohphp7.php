
<!DOCTYPE html>
<html>
<head>
    <title>Contoh PHP 7</title>
</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="">
        Nama:
        <input type="text" name="nama" required>
        <br><br>

        NIM:
        <input type="text" name="nim" required>
        <br><br>

        Jurusan:
        <input type="text" name="jurusan" required>
        <br><br>

        <input type="submit" name="kirim" value="Kirim">
    </form>

    <?php
        if (isset($_POST['kirim'])) {
            $nama = htmlspecialchars($_POST['nama']);
            $nim = htmlspecialchars($_POST['nim']);
            $jurusan = htmlspecialchars($_POST['jurusan']);

            echo "<h3>Data Berhasil Dikirim</h3>";
            echo "Nama: " . $nama . "<br>";
            echo "NIM: " . $nim . "<br>";
            echo "Jurusan: " . $jurusan;
        }
    ?>
</body>
</html>
