<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Ciclo Foreach con PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            /* padding: 0px; */
            background-color: #e8ebed;
            color: #2d3748;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }


        .studente-box {
            background-color: white;
            margin: 20px;
            padding: 20px;
            border-left: 5px solid #92ee64;
            width: 250px;
            border-radius: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);

        }

        h3 {
            color: #2d3748;
            border-bottom: 2px solid #92ee64;
            padding-bottom: 8px;
        }

        h3.titolo {

            color: #2d3748;
            border-bottom: 2px solid #2d3748;
            padding-bottom: 8px;

        }
    </style>
</head>

<body>


    <div class="titolo">
        <h3 class="titolo">Lista Studenti</h3>
    </div>
    <div class="container">
        <?php
        $profiloStudenti = [
            [
                "Nome" => "Luana",
                "Corso" => "PHP Full-Stack",
                "Stato" => "Iscritta",
                "Voto Medio" => 9
            ],

            [
                "Nome" => "Francesco",
                "Corso" => "PHP Full-Stack",
                "Stato" => "In corso",
                "Voto Medio" => 8
            ],

            [
                "Nome" => "Andrea",
                "Corso" => "C# Developer",
                "Stato" => "Iscritto",
                "Voto Medio" => 9
            ],

            [
                "Nome" => "Paolo",
                "Corso" => "Python Data Analyst",
                "Stato" => "Sospeso",
                "Voto Medio" => 2
            ],

            [
                "Nome" => "Fabio",
                "Corso" => "Sql Server",
                "Stato" => "In corso",
                "Voto Medio" => 10
            ],
        ];

        // Il foreach mappa la chiave in $proprieta e il contenuto in $dato
        // foreach ($profiloStudente as $proprieta => $dato) {
        //     echo "<li>" . $proprieta . ": <strong>" . $dato . "</strong></li>";
        // }


        // Primo ciclo: Entra nella lista  e prende uno studente alla volta
        foreach ($profiloStudenti as $studente) {
            // Apriamo il contenitore del box HTML per lo studente corrente
            echo '<div class="studente-box">';

            // Stampiamo il nom dello studente come titolo del box
            echo "<h3>Profilo di: " . $studente["Nome"] . " </h3>";
            echo "<ul>";

            foreach ($studente as $proprieta => $dato) {

                // se la proprieta à uguale al Nome 
                if ($proprieta != "Nome") {
                    echo "<li>" . $proprieta . ": <strong>" . $dato . "</strong></li>";
                }
            }

            echo "</ul>";
            echo "</div>";
        }
        ?>

    </div>

</body>

</html>