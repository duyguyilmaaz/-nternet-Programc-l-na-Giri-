<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Türleri ve Özellikleri</title>
</head>

<body>
    <p>Bu <?php echo "harika"; ?> bir paragraf satırıdır.</p>
    <?php echo "Bu SADECE bir paragraf satırıdır."; ?>

    <br>

    <?php
    $ad = "Duygu Yılmaz";
    echo $ad;
    ?>

    <?php
    //Skaler Türleri (bir değer içerir)
    // $string = "Duygu";
    // $int = 12341234;
    // $float = 2.5678;
    // $boolean = true;
    
    // $string = "";
    // $int = 0;
    // $float = 0;
    // $boolean = false;
    
    // $array =[];
    // $object = null;
    
    //Dizi Türü
    //$isimler = ["Duygu", "Ahmet", "Cansu"];
    
    //Nesne Türü
    //$nesne = new Araba();
    
    $ad = "Duygu Yılmaz";
    $test = $ad;
    ?>

    <p>Merhaba! Benim adım <?php echo $test ?>, ve ben PHP öğreniyorum</p>


</body>

</html>