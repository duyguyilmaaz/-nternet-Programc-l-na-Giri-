<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Hesaplama Formu</title>
</head>
<body>
    <h2>Not Hesaplama Formu</h2>
    <form action="" method="POST">
        <label for="ad">Ad:</label><br>
        <input type="text" id="ad" name="ad" required><br><br>

        <label for="soyad">Soyad:</label><br>
        <input type="text" id="soyad" name="soyad" required><br><br>

        <label for="vize">Vize Notu:</label><br>
        <input type="number" id="vize" name="vize" required><br><br>

        <label for="final">Final Notu:</label><br>
        <input type="number" id="final" name="final" required><br><br>

        <label for="proje">Proje Notu:</label><br>
        <input type="number" id="proje" name="proje" required><br><br>

        <input type="submit" name="kaydet" value="Hesapla">
    </form>

    <?php
    if (isset($_POST["kaydet"])) {
        $kadi = $_POST["ad"];
        $ksoyad = $_POST["soyad"];
        $kvize = $_POST["vize"];
        $kfinal = $_POST["final"];
        $kproje = $_POST["proje"];
        $ortalama = ($kvize * 0.5) + ($kfinal * 0.25) + ($kproje * 0.25);
        echo "Merhaba " . $kadi . " " . $ksoyad . "<br>" . "Vize Notun: " . $kvize . "<br>" . "Final Notun: " . $kfinal . "<br>" . "Proje Notun: " . $kproje . "<br>" . "Ortalaman: " . $ortalama . "<br>";
        if ($ortalama > 40 && $kproje >= 40) {
            echo "Tebrikler " . $ortalama . " ortalama ile dersi tamamladın";
        } else {
            echo "Maalesef " . $ortalama . " ile dersten kaldın";
        }
    }
    ?>
</body>
</html>
