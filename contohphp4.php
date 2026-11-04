
<!DOCTYPE html>
<html>
<head>
    <title>Contoh PHP 4</title>
</head>
<body>
    <h2>Biodata Mahasiswa</h2>

    <?php
        $nama = "Muhammad Fadhil Pratama";
        $nim = "1201234567";
        $kelas = "D4SM49-03";
        $jurusan = "Teknologi Rekayasa Multimedia";
        $universitas = "Telkom University";
    ?>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Data</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td><?php echo $kelas; ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <td>Universitas</td>
            <td><?php echo $universitas; ?></td>
        </tr>
    </table>
</body>
</html>
