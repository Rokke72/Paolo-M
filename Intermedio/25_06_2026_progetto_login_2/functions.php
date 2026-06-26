<?php
// Crea la chiave di Accesso
function createLoginKey(string $email, string $password): string
{
    return $email . " | " . $password;
    // es: restituira email@...!password123
}

// cerca utente
// Scorre tutti gli utenti e verifica se esite o uguale
function trovaUtente(string $loginKey, array $utenti): ?array
{
    foreach ($utenti as $utente) {
        $key = createLoginKey($utente["email"], $utente["password"]);

        if ($loginKey === $key) {
            return $utente;
        }
    }

    return null;
}

// Gestione del Ruolo con switch
// im base al ruolo mostra un messaggio diverso
// function mostraRuolo di tipo void cun un parametro di tipo stringa

function mostraRuolo(string $ruolo): void
{
    switch ($ruolo) {
        case "admin":
            echo "Benvenuto Amministratore!";
            break;
        case "docente":
            echo "Benvenuto Docente!";
            break;
        case "studente":
            echo "Buenvenuto Studente!";
            break;
        default:
            echo "Ruolo non riconosciuto.";
    }
}
