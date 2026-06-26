<?php
include 'header.php';

?>

<body>
    <div class="container">
        <h1>Login System 1</h1>

        <!-- form: definisce il modulo, action=login.php  con il metodo=POST -->

        <form action="login.php" method="post">

            <label for="email">Indirizzo Email</label>

            <!-- type="email_utente": fondamentale-->
            <input type="email" name="email_utente" placeholder="Es. mario.rossi@example.com" id="email" required>

            <label for="password">Password</label>
            <input type="password" name="password_utente" placeholder="Inserisci la tua Password" id="password" required>


            <button type="submit">Verifica</button>

        </form>

        <?php
        // IF: Controlla se la pagina è stata caricata ed eseguita dall'invio del form
        // $_SERVER["REQUEST_METHOD"] contiene il metodo usato per la richiesta attuale (GET, POST)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email_utente"];
            $password = $_POST["password_utente"];

            // Dati del Database
            $emailCorrente = "studente@gmail.com";
            $passwordCorrente = "password@123";

            //
            if ($email != $emailCorrente && $password != $passwordCorrente) {
                echo "<div class='messaggio-negativo'>";
                echo "Accesso Negato!<br>";
                echo "Verifica email e/o password.";
                echo "</div>";
            } elseif ($email != $emailCorrente) {
                echo "<div class='messaggio-negativo'>";
                echo "Accesso Negato!<br>";
                echo "Verifica l'email inserita.";
                echo "</div>";
            } elseif ($password != $passwordCorrente) {
                echo "<div class='messaggio-negativo'>";
                echo "Accesso Negato!<br>";
                echo "Verifica la password inserita.";
                echo "</div>";
            } else {
                echo "<div class='messaggio-positivo'>";
                echo "Accesso Consentito!";
                echo "</div>";
            }
        }

        ?>

    </div>

</body>

</html>