<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form İşleme</title>
</head>

<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">İsim?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Soyisim?</label>
            <input for="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="favoritepet">En Sevdiğin Evcil Hayvan?</label>
            <select id="favoritepet" name="favoritepet">
                <option value="none">Hiçbiri</option>
                <option value="dog">Köpek</option>
                <option value="cat">Kedi</option>
                <option value="bird">Kuş</option>
            </select>

            <button type="submit">Göder</button>
        </form>
    </main>

</body>

</html>