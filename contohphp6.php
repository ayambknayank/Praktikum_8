
<!DOCTYPE html>
<html>
<head>
    <title>Contoh PHP 6</title>
</head>
<body>
    <h2>Menghitung Luas Lingkaran</h2>

    <?php
        define("PHI", 3.14);
        define("JARI_JARI", 7);

        $luas = PHI * JARI_JARI * JARI_JARI;

        echo "Nilai Phi: " . PHI . "<br>";
        echo "Jari-jari: " . JARI_JARI . " cm<br>";
        echo "Luas lingkaran: " . $luas . " cm2";
    ?>
</body>
</html>
