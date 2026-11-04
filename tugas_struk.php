
<!DOCTYPE html>
<html>
<head>
    <title>Struk Nota Belanja</title>
</head>
<body>
    <h2 align="center">STRUK NOTA BELANJA</h2>

    <?php
        $nama_barang = "Mouse Wireless";
        $harga_satuan = 100000;
        $jumlah_beli = 2;

        $total_kotor = $harga_satuan * $jumlah_beli;
        $diskon = $total_kotor * 10 / 100;
        $total_bersih = $total_kotor - $diskon;
    ?>

    <table border="1" cellpadding="10" cellspacing="0"
           align="center" width="500">
        <tr>
            <th colspan="2">DETAIL PEMBELIAN</th>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><?php echo $nama_barang; ?></td>
        </tr>
        <tr>
            <td>Harga Satuan</td>
            <td>Rp <?php echo number_format($harga_satuan, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td><?php echo $jumlah_beli; ?></td>
        </tr>
        <tr>
            <td>Total Bayar Kotor</td>
            <td>Rp <?php echo number_format($total_kotor, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <td>Diskon (10%)</td>
            <td>Rp <?php echo number_format($diskon, 0, ',', '.'); ?></td>
        </tr>
        <tr>
            <th>Total Bersih</th>
            <th>Rp <?php echo number_format($total_bersih, 0, ',', '.'); ?></th>
        </tr>
    </table>

    <p align="center">Terima kasih telah berbelanja!</p>
</body>
</html>
