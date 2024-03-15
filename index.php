<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP-BADWORDS</title>
</head>
<body>
    <h1 class="text-center">Form di censura</h1>

    <form action="results.php" method="get">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph"></textarea><br>
        <label for="word">Parola da censurare:</label><br>
        <input type="text" id="word" name="word"><br>
        <input type="submit" value="Invia">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>