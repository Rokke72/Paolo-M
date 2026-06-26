<?php
// Rappresenta una tabella
// Questo metodo ci restituisce l'elenco di tutti gli utenti presenti nel db
// select * from utenti


function getUtenti(): array
{
    return [
        [
            "email" => "admin@gmail.com",
            "password" => "Admin123",
            "ruolo" => "admin"
        ],
        [
            "email" => "docente@gmail.com",
            "password" => "Docente123",
            "ruolo" => "docente"
        ],
        [
            "email" => "studente@gmail.com",
            "password" => "Studente123",
            "ruolo" => "studente"
        ],
    ];
}
