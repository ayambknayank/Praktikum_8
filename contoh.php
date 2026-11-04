<html>

<head>
    <title>Contoh PHP</title>
</head>

<body>
    <h1>Selamat Datang di Contoh PHP</h1>
    <?php
    // Menampilkan tanggal dan waktu saat ini
    echo "<p>Hari ini adalah: " . date("l, d F Y") . "</p>";
    echo "<p>Waktu saat ini: " . date("H:i:s") . "</p>";

    $x = 5;
    $y = 7;
    $z = $x * $y;
    echo "<p>Hasil perkalian $x dan $y adalah: $z</p>";

    $nim = "6701230001";
    $nama = "Ahmad Maulana";
    $nilai1 = 80;
    $nilai2 = 90;
    $rata = ($nilai1 + $nilai2) / 2;
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Rata-rata Nilai</td>
            <td><?php echo $rata; ?></td>
        </tr>
    </table>
</body>

</html>