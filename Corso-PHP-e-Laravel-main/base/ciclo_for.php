<?php
/*
    for(condizione){
    codice
    }
    
    */
$studenti = [
    "Francesco", // 0
    "Luana",     // 1
    "Annalisa",   // 2
    "Marco",     // 3
    "Paolo",     // 4
    "Davide",    // 5
    "Carlo",     // 6
    "Daniele",    // 7
    "Fabio",
    "Luca"
];

// Operatori +; -; /; *
// $i = $i + 1
$totaleStudenti = count($studenti);

for ($i = 0; $i < $totaleStudenti; $i++) {
    echo "<li>Studente in posizione " . $i . ": " . $studenti[$i] . "</li>";
}
