<?php
// Lo switch è una struttura di controllo condizionale

/*
    Sintassi di base
    dichiarazione della variabile = 85 ;

    switch(variabile)
    {
        case valore1:
            // codice ---es: stampa o chiamata di una funzione
            break // ferma lo switch

        case valore2:
            // codice ---es: stampa o chiamata di una funzione
            break

        default:
            // codice se nessun caso è valido
    }
*/


/*

    Come funziona:
    PHP fa questo processo: 😂
    1. prende la variabile
    2. la confronta
    3. quando trova una corrispondeza -> esegue il blocco del codice 
    4. break ferma lo switch (il ciclo)
    5. default è caso "altrimenti" come nella condizione if/else"  

*/
function lunedi()
{
    echo "siamo al primo giorno della settimana";
}

$giorno = "lunedì";

switch ($giorno) {
    case "lunedì":
        lunedi();
        break;
    case "martedì":
        echo "siamo al secondo giorno della settimana";
        break;
    case "mercoledì":
        echo "siamo al terzo giorno della settimana";
        break;
    case "giovedì":
        echo "siamo al quarto giorno della settimana";
        break;
    case "venerdì":
        echo "siamo al quinto giorno della settimana";
        break;
    default:
        echo "giorno festivo 😁😁";
}


//   verificare il voto dello studente che ha 28

$voto = 30;
echo "<br><hr>";

switch ($voto) {
    case 30:
        echo "Eccellente! Promosso";
        break;
    case 28:
    case 29:
        echo "Ottimo! Promosso";
        break;
    case 20:
        echo "Buono";
        break;
    case 15:
        echo "Esame non superato";
        break;
    default:
        echo "Voto non riconosciuto";
}
