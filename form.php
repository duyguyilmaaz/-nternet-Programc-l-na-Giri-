<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Oluşturma</title>
</head>

<body>
    <form name="form" action="" method="post">
        <table>
            <tr>
                <td>Adı:</td>
                <td>
                    <input type="text" name="adi">
                </td>
            </tr>
            <tr>
                <td>Soyadı</td>
                <td>
                    <input type="text" name="soyadi">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="gonder" value="Kaydet"><br>
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
    echo "Merhaba " . $kadi . " " . $ksoyadi;
}
?>