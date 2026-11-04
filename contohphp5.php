
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Aritmatika</title>
</head>
<body>
    <h2>Program Operasi Aritmatika</h2>

    <?php
        $bilangan1 = 20;
        $bilangan2 = 6;

        $tambah = $bilangan1 + $bilangan2;
        $kurang = $bilangan1 - $bilangan2;
        $kali = $bilangan1 * $bilangan2;
        $bagi = $bilangan1 / $bilangan2;
        $modulus = $bilangan1 % $bilangan2;

        echo "Bilangan pertama: $bilangan1 <br>";
        echo "Bilangan kedua: $bilangan2 <br><br>";

        echo "Hasil Penjumlahan: $tambah <br>";
        echo "Hasil Pengurangan: $kurang <br>";
        echo "Hasil Perkalian: $kali <br>";
        echo "Hasil Pembagian: " . round($bagi, 2) . "<br>";
        echo "Hasil Modulus: $modulus <br>";
    ?>
</body>
</html>
