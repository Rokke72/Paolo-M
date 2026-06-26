<?php
// Json serve per salvare e scambiare dati
$utente = [
    [
        "atletaId" => 30,
        "nome" => "Laura",
        "cognome" => "Caruso",
        "sesso" => 'F',
        "dataNascita" => "1987/02/23",
        "citta" =>  "Ferrara",
        "nazionalita" => "Italiana"
    ],
    [
        "atletaId" => 30,
        "nome" => "Laura",
        "cognome" => "Caruso",
        "sesso" => 'F',
        "dataNascita" => "1987/02/23",
        "citta" =>  "Ferrara",
        "nazionalita" => "Italiana"
    ]
];

// converzione l'array in json
$jsonAPI = json_encode($utente);

$cartella = "data";
$path = $cartella . "/utenti.json";

// Se non esiste lo crea 
// mkdir(data) crea una nuova cartella 
// Il permesso 0777 indica permessi
// il parametro true permettono di creare anche le cartelle annidate
if (!is_dir($cartella)) {
    mkdir($cartella, 0777, true);
}

// Se non esiste lo crea e scrive un array Json voto
if (!file_exists($path)) {
    file_put_contents($path, "[]");
}

// Salvataggio nel fil utenti.json
file_put_contents($path, $jsonAPI);


echo "<h5>Il salvataggio è andata a buon fine</h5>";


// echo "<h3>JSON</h3>";
// echo ($jsonAPI);

// // C    ONVERTE DA JSON IN ARRAY
// $arrayPhp = json_decode($jsonAPI, true);

// echo "<h3>ARRAY PHP</h3>";

// print_r($arrayPhp);
