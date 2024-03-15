<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP-BADWORDS</title>
</head>
<body>

    <div class="container">

        <div class="row p-5">
            <div class="card p-0">
                <div class="card-body p-0">
                    <h1 class="card-title text-center p-3">Form di Censura</h1>
                    <hr>
                    <div class="form-container p-5">
                        <form action="results.php" method="get">
                            <label for="paragraph">Paragrafo:</label><br>
                            <textarea id="paragraph" name="paragraph" rows="5" cols="50"></textarea><br>
                            <label for="word">Parola da censurare:</label><br>
                            <input class="mb-4" type="text" id="word" name="word"><br>
                            <input type="submit" value="Invia">
                        </form>            
                    </div>   
                </div>
            </div>
        
        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>