<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 1</title>

</head>

<body>
    <?php
    $nomeUtente = "Paolo";
    $passwordUtente = "Pippo2026";



    if ($nomeUtente != "Paolo") {
        echo "<h2>Utente <b>non</b> riconosciuto<h2>";
    } elseif ($passwordUtente != "Pippo2026") {
        echo "<h2>Password <b>non</b> valida";
    } else {
        echo "<h1><strong>Utente autorizzato</strong></h1>";
    }


    ?>
</body>

</html>