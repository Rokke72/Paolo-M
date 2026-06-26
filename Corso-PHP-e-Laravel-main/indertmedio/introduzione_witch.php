<?php
// Lo swich è una struttura di controllo condizionale 

/*
    Sintassi base:
    dichiarazione della variabile = 85;

    switch(variabile)
    {
        case valore1:
            // codice ---es: stampa o chiamata di una afunzione
            break; // ferma lo switch

        case valore2:
            // codice ---es: stampa o chiamata di una afunzione
            break;

        default:
            // codice se nessun caso è valido
    } 
*/


/*
    Come funziona:
    PHP fa questo processo:😅
    1. prende la variabile
    2. la confronta 
    3. quando trova una corrispondeza -> esegue il blocco del codice 
    4. break ferma lo switch(il ciclo)
    5. default è caso "altrimenti come nella condizione if/else"

*/


function lunedi()
{
    echo "Siamo il primo giorno della settimana";
}

$giorno = "lunedi";

switch ($giorno) {
    case "lunedi":
        lunedi();
        break; // ferma lo switch

    case "martedi":
        echo "Siamo il secondo giorno della settimanaa<br>";
        break;

    case "mercolodi":
        echo "Siamo il sezo giorno della settimana";
        break;

    case "giovedi":
        echo "Mancan solo un giorno per fare l'aperitivo🎉🎉";
        break;

    case "venredi":
        echo "Non dico🎉🎉";
        break;
    default:
        echo "Giorno normale 🤨🤨🤨";
}



// Verificare il voto dello studente che ha 28

$voto = 28;
echo "<br><hr>";

switch ($voto) {
    case 30:
        echo "Eccelente! promosso";
        break;

    case 28:
    case 29:
        echo "Ottimo lavero Paolo";
        break;

    case 15:
        echo "Esame non superata il voto è insuficente";
        break;

    case 20:
        echo "Buono";
        break;
    default:
        echo "Voto non riconosciuto";
}
