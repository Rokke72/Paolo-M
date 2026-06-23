<?php
    $studenti = [
        "Francesco",    // 0
        "Luana",        // 1
        "Annalisa",     // 2
        "Marco",        // 3
        "Paolo",        // 4
        "Davide",       // 5
        "Carlo",        // 6
        "Daniele"       // 7
    ];

    // la funzione count() ci dice quanti elementi esistono all'interno di $studenti

    $totaleStudenti = count($studenti);

    // Stampo il risultato

    echo "Gli studenti sono in tutto " . $totaleStudenti . ".<br>";

    // Stampiamo l'ultimo elemento dell'elenco (array o lista) studenti 

    echo "L'ultimo della lista è " . $studenti[7] . ".<br>";

    // Stampiamo l'elemento dell'elenco che corrisponde a Paolo

    echo $studenti[4] . " è il numero 5.<br>";
    echo "<hr>"; // stampa una riga(linea)

    // ==========================================
    // Aggiungere un elemento alla lista (array)
    // ==========================================
 
    $studenti[] = "Fabio";
    // array_push($studenti, "Diana");

    // Stampiamo il risultato
    echo "<b>AGGIUNTA</b> Abbiamo aggiunto uno studente.<br>";
    echo "Ora l'ultimo studente è " . $studenti[8] . ",<br>";
    echo "e gli studenti in tutto sono " . count($studenti) . ".<br>";
    echo "<hr>"; // stampa una riga(linea)

    // ==================================
    // Modificazione dello studente 
    // ==================================
    echo "Cambiamo lo studente 4, che ora è: " . $studenti[3] . ",";
    $studenti[3] = "Maria";
    echo "e diventa: " . $studenti[3] . ".<br>";
    echo "Invece, al posto di " . $studenti[4];
    $studenti[4] = "Giovanni";
    echo " ora c'è " . $studenti[4] . ".<br>";
    echo "Ora gli studenti in tutto sono " . count($studenti) . ".<br>";    
    echo "<hr>"; // stampa una riga(linea)


    // ==========================================
    // Eliminare un elemento(studente)
    // ==========================================

    // Eliminiamo "annalisa" che si trova ll'indie 2.
    // Usiamo (array_splice) così gli utenti scalano indietro e gli imdici si riordinano


    echo "<b>ELIMINAZIONE</b> Abbiamo eliminato lo studente con l'indice 2 (" . $studenti[2] . ").<br>";
    array_splice($studenti, 2, 1);
    echo "Ora gli studenti in tutto sono " . count($studenti) . ",<br>";
    echo "e al terzo posto (indice 2) ora c'è " . $studenti[2] . ".<br>";
    echo "<hr>"; // stampa una riga(linea)

    

