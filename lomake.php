<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palautelomake</title>
</head>
<body>
    <h1>Palautelomake</h1>

    <form method="post" action="save.php">
        <label for="nimi">Nimi</label>
        <br>
        <input type="text" name="nimi">
        <br>

        <label for="palaute">Palaute</label>
        <br>
        <textarea name="palaute" id="" cols="30" rows="10"></textarea>
        <br>

        <input name="laheta" type="submit" value="Lähetä">
    </form>
    
</body>
</html>