<?php

    $user_paragraph = $_GET['paragraph'];
    $wordCensored = $_GET['word'];
    
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato del Form</title>
</head>
<body>
    
<?php
    echo "<h2>Paragrafo:</h2>";
    echo "<p>$user_paragraph</p>";
    echo "<p>Lunghezza del paragrafo: " . strlen($user_paragraph) . " lettere</p>";

    $censoredParagraph = str_replace($wordCensored, '***', $user_paragraph);

    echo "<h2>Paragrafo Censurato:</h2>";
    echo "<p>$censoredParagraph</p>";
    echo "<p>Lunghezza del paragrafo censurato: " . strlen($censoredParagraph) . " lettere</p>";
?>   
</body>
</html>