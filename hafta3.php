<!-- Operatörler -->
<!--isset fonksiyonu -->
<?php
//isset, unset kullanımı
// echo "isset($AdiSoyadi)";
// $AdiSoyadi = "Duygu Yılmaz";
// echo "isset($AdiSoyadi).<br>";

// $degisken = "Gelisim Üniversitesi";
// echo $degisken."<br>";
// unset($degisken); //değişkeni siler.
// echo $degisken;

//Doğum Yılı Hesaplama
// $yil = 2034;
// $dogum_yili = 2004;
// $yas = $yil - $dogum_yili;
// echo "Benim Yaşım" . $yas;

echo "<h3>Basit Hesap Makinesi</h3>" . "<br>";
$sayi1 = 35;
$sayi2 = 5;
$toplama = $sayi1 + $sayi2;
$cikarma = $sayi1 - $sayi2;
$carpma = $sayi1 * $sayi2;
$bolme = $sayi1 / $sayi2;
$mod = $sayi1 % $sayi2;
$ustalma = $sayi1 ** $sayi2;

echo "1.sayının değeri:" . $sayi1 . "<br>" .
    "2.sayının değeri:" . $sayi2 . "<br>" .
    "Toplama işleminin sonucu:" . $toplama . "<br>" .
    "Çıkarma işleminin sonucu:" . $cikarma . "<br>" .
    "Çarpma işleminin sonucu:" . $carpma . "<br>" .
    "Bölme işleminin sonucu:" . $bolme . "<br>" .
    "Mod alma işleminin sonucu:" . $mod . "<br>" .
    "Üs alma işleminin sonucu:" . $ustalma . "<br>";

//Atama Operatörleri
// ++ arttırma
// -- azaltma
//Artırma ve Azaltma Operatörleri
$sayi = 15;
echo "<u>Yazmış olduğumuz sayı değeri:</u>" . $sayi . "<br>" .
    "Sayının değerini artırma işlemi:" . ++$sayi . "<br>" .
    "Sayının değerini azaltma işlemi:" . --$sayi;

//Karşılaştırma Operatörleri


?>