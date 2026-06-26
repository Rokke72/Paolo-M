<?php
$studenti = [
    "Francesco", // 0
    "Luana",     // 1
    "Analisa",   // 2
    "Marco",     // 3
    "Paolo",     // 4
    "Davide",    // 5
    "Carlo",     // 6
    "Daniele"    // 7
];

// La funzione count() ci dice quanti elementi esistono  
$totaleStudenti = count($studenti);

// stapo il risultato
echo "Il numero totale degli studenti sono = " . $totaleStudenti . "<br>";

// Stampo l'ultimo elemento della tabella(array o lista) studenti
echo "L\'utimo studente è " . $studenti[7] . "<br>";

echo "Lo studente numero 5 lista è " . $studenti[5] . "<br>";
echo "<hr>";

// ==================================
// Aggiungere un/o elemento(studente) 
// ==================================

$studenti[] = "Fabio";
// array_push($studenti, "Diana");

echo "<b>AGGIUNTA</b> Abbiamo aggiunto uno studente<br>";
echo "Ora l\'utimo studente è " . $studenti[8] . "<br>";

// Numero totale degli studenti
echo "Nuovo totale studenti: " . count($studenti) . "<br>";

echo "<hr>";

// ==================================
// Modificazione dello studente 
// ==================================
$studenti[2] = "Giovanni";
$studenti[4] = "Luca";

echo "<b>[Update]</b> I dati sono stati aggiornati<br>";
echo "<br>Ora lo studente all\'indice 2 è diventato: " . $studenti[2];
echo "<br>Ora lo studente all\'indice 4 è diventato: " . $studenti[4] . "<br>";





// ==================================
// Eliminare un/o elemento(studente) 
// ==================================

// Vogli eliminare "Analisa" che si trova all'indice 2.
// Usiamo (array_splice) cosi gli studenti scalano indietro e gli indici si riordinano
echo "Stampo il nome dello studente " . $studenti[2] . "<br>";
echo "<b>[ELIMINAZIONE]</b> Abbiamo tolto uno studente con l'indice 2 " . $studenti[2] . "<br>";
array_splice($studenti, 2, 1);

echo "Nuovo totale studenti: " . count($studenti) . "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
