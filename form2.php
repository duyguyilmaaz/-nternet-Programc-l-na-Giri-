<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Uygulama</title>
</head>

<body>
    <form action="">
        <table>
            <tr>
                <td>Adı:</td>
                <td>
                    <input type="text" name="adi">
                </td>
            </tr>
            <tr>
                <td>Soyadı:</td>
                <td>
                    <input type="text" name="soyadi">
                </td>
            </tr>
            <tr>
                <td>TC Kimlik Numarası:</td>
                <td>
                    <input type="text" id="tcInput" placeholder="TC Kimlik No" maxlength="11" name="kimlik">
                </td>
            </tr>
            <tr>
                <td>Eğitim Durumu:</td>
                <ul>
                    <li>
                        <td>Ön Lisans</td>
                        <td><input type="radio" name="seviye"></td>
                    </li>
                    <li>
                        <td>Lisans</td>
                        <td><input type="radio" name="seviye"></td>
                    </li>
                    <li>
                        <td>Yüksek Lisans</td>
                        <td><input type="radio" name="seviye"></td>
                    </li>
                </ul>
            <tr>
                </td>
            </tr>
            <tr>
                <td>Cinsiyet:</td>
                <td>
                    Kadın <input type="radio" name="cinsiyetRadio" checked="true" name="cinsiyet" /> <br>
                    Erkek <input type="radio" name="cinsiyetRadio" name="cinsiyet" />
                </td>
            </tr>
            <tr>
                <td>Not Alanı</td>
                <td>
                    <textarea name="mesajInput"></textarea>
                </td>
            </tr>
            <tr>
                <td>Gönder</td>
                <td>
                    <input type="submit" name="gonder" value="Gönder">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST["gonder"])) {
    $kadi = $_POST["adi"];
    $ksoyadi = $_POST["soyadi"];
    $kkimlik = $_POST["kimlik"];
    $kegitim = $_POST["seviye"];
    $kcinsiyet = $_POST["cinsiyet"];
    $kmesajInput = $_POST["mesajInput"];
    echo "Merhaba " . $kadi . " " . $ksoyadi . " " . $kegitim . " " . "mezunuyum.";
}
?>