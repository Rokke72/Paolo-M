<?php
include "header.php"
?>

<body>

    <div class="container">
        <h1>🔒 Login System 2</h1>

        <form action="login.php" method="post">

            <label>Indirizzo Email</label>
            <input type="email" name="email" placeholder="Es. mario.rossi@example.com" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Inserisci la tua Password" required>

            <button type="submit">Accedi</button>
        </form>
    </div>

</body>

</html>