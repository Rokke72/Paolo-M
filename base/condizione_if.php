<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condizione IF in Php</title>

</head>

<body>
    <?php
        $totaleSpesa = 899; // in Euro
        $tipoCliente = "Gold";

        if($tipoCliente == "Silver"){
            $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.20); //20% di sconto
            echo "Cliente premium Silver! Hai diritto al 20% di sconto. Il suo prezzo finale è " .  $totaleScontato . "€";
        }
        elseif($tipoCliente == "Gold"){
            $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.30); //30% di sconto
            echo "Cliente premium Gold! Hai diritto al 30% di sconto. Il suo prezzo finale è " .  $totaleScontato . "€";
        }
        elseif($tipoCliente == "Platinum"){
            $totaleScontato = $totaleSpesa - ($totaleSpesa * 0.40); //40% di sconto
            echo "Cliente premium Platinum! Hai diritto al 40% di sconto. Il suo prezzo finale è " .  $totaleScontato . "€";
        }
        else{
            echo "Nessuno sconto applicabile. Il prezzo totale è di " . $totaleSpesa . "€";
        }
        
    ?>
</body>

</html>