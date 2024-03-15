<?php

    $user_paragraph = $_GET['paragraph'];
    $wordCensored = $_GET['word'];

    $censoredParagraph = str_replace($wordCensored, '***', $user_paragraph);
    
?>

<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Risultato del Form</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <div class="card shadow">
                    <div class="card-body d-flex flex-column gap-3 px-0 py-2">
                        <h2 class="card-title p-4 text-success">Paragrafo</h2>
                        <hr>
                        <p class="card-text p-4 fs-3"><?php  echo $user_paragraph ?></p>
                        <p class="card-text p-4 fs-3">Lunghezza del paragrafo: <?php  echo strlen($user_paragraph) ?> lettere</p>
                    </div>
                </div>
            </div>
            <div class="col-6 p-5">
                <div class="card shadow">
                    <div class="card-body d-flex flex-column gap-3 px-0 py-2">
                        <h2 class="card-title p-4 text-danger">Paragrafo Censurato</h2>
                        <hr>
                        <p class="card-text p-4 fs-3"><?php  echo $censoredParagraph ?></p>
                        <p class="card-text p-4 fs-3">Lunghezza del paragrafo: <?php  echo strlen($censoredParagraph) ?> lettere</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>