<?php

require_once "utenti.php";
require_once "functions.php";

include "header.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // dati form
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    // creazione chiave login
    $loginKey = createLoginKey($email, $password);

    //🔎 Ricerca l'utente nel database
    $utente = trovaUtente($loginKey, getUtenti());

    echo "<h2 style='margin-top: 50px';>Risultato del login</h2>";


    if ($utente) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Accesso effettuato',
                text: 'Benvenuto {$utente['email']}',
                confirmButtonText: 'Continua'
            }).then(() => {
        // Gestione del ruolo
        switch ('{$utente['ruolo']}') {
            case 'admin':
                window.location.href = 'admin.php';
                break;
            case 'docente':
                window.location.href = 'docente.php';
                break;
            default:
                window.location.href = 'studente.php';
            }
        });
        </script>";
    } else {
        echo
        "<script>
        Swal.fire({
            icon:  'error',
            title: 'Accesso negato',
            text:  'Verifica la password o la email',
            confirmButtonText: 'Riprova'
        }).then(() => {
            window.location.href = 'index.php';
        });
        </script>";
    }
}

    // $nome = valore ? true : false // se il nome è uguale al valore, altrimenti (:) falso
