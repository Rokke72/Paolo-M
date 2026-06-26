<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condizione if in Php</title>
</head>

<body>
    <?php
    $totaleSpesa = 899; // in Euro
    $tipoCliente = "Silver";

    if ($tipoCliente == "Gold") {
        $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.20); // 20% di sconto
        echo "Cliente premium Gold! Hai gudagnato 20% di sconto. il suo prezzo finale è " . $totaleScontato . "€";
    } elseif ($tipoCliente == "Silver") {
        $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.10); // 20% di sconto
        echo "Ottimo! Hai gudagnato 10% di sconto. il suo prezzo finale è " . $totaleScontato . "€";
    } else {
        echo "Nessuno sconto applicato per clienti standard";
    }
    ?>
</body>

</html>