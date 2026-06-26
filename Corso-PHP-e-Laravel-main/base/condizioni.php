<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corso Php</title>
</head>

<body>
    <?php
    /*
        1. Operatori di Confronto

        Prima di utilizzare gli IF dobbiamo conoscere gli operatori di confronto.

            | Operatore | Significato       |
            | --------- | ----------------- |
            | ==        | Uguale            |
            | ===       | Identico          |
            | !=        | Diverso           |
            | >         | Maggiore          |
            | <         | Minore            |
            | >=        | Maggiore o uguale |
            | <=        | Minore o uguale   |
        */

    /* 
            Controllo di Flusso e Strutture di Iterazione 
            Un'applicazione aziendale deve saper
            prendere decisioni (strutture condizionali) 
            e automatizzare le operazioni ripetitive su grandi quantità di dati (cicli). 
                
            La logica condizionale:
                (IF(se), 
                ELSEIF(altrimenti se ), 
                ELSE(altrimenti)) 
            
            sintassi di base di if/else:
                if(condizione){ 
                    codice 
                } 
                else{ 
                    codice 
                } 
        */

    // $eta_database = 45;

    // $eta_utente = 45;
    // if ($eta_utente == $eta_database) {
    //     echo "<h1>Complimenti hai indovinato <strong>🎉 <strong> </h1>";
    //     echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsa vel id placeat obcaecati officia aliquam illum eius ut distinctio. Expedita soluta quam exercitationem et distinctio facilis iusto alias possimus?</p>";
    // } else {
    //     echo "<i>Hai sbagliato⚠️⚠️⚠️⚠️</i>";
    // }

    $etaUtente = 15;
    $etaMinima = 18;


    if ($etaUtente == 15) {
        echo "⚠️Attenzione! eta non riconosciuto";
    } elseif ($etaUtente >= $etaMinima) {
        echo "Aquisto autorizzato. Procedi al pagamento☺️";
    } else {
        $anniMancanti = $etaMinima - $etaUtente;
        echo "Sei stato bloccato del sistema perche hai meno di 18 ti macano ancora " . $anniMancanti . " anni";
    }

    ?>

</body>

</html>