<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Corso PHP</title>
</head>

<body>
<?php
/*

Prima di utilizzare gli IF dobbiamo conoscere gli operatori di confronto.
    | --------- | --------- |
    | ==        | Uguale    |
    | ===       | Identico  |
    | !=        | Diverso   |



    La logica condizionale:
        if()


    sintassi di base di <if>
    if(condizione){
        codice
    }
    else {
        codice
    }
*/


// esempio 1
//
// $eta_database = 45;
// $eta_utente = 45;
// if($eta_utente == $eta_database){
//    echo "<h1>ok, l'età corrisponde!</h1>" ;
//    echo "<p>lorem ipsum</p>";
// }
// else {
// echo "<i>ops, l'età non corrisponde!</i>" ;
// }

// esempio 2

$etaUtente = 15;
$etaMinima = 18 ;

if($etaUtente >= $etaMinima){
    echo "Acquisto autorizzato. procedi al pagamento";
}
else {
    $anniMancanti = $etaMinima - $etaUtente;
    echo "Sei stato bloccato perchè hai meno di 18 anni. Ritenta tra " . $anniMancanti . " anni.";
}

?>

</body>

</html>