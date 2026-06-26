<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio sulle funzioni, 23 giugno 2026</title>
    <style>
        body {
            padding: 50px;
            margin: 50px;
            background-color: #daadad;
        }

        .box {
            width: 150px;
            height: 250px;
            background-color: #fff;
            border-radius: 16px;
            border: 2px solid black;
            box-shadow: 2px 2px 8px gray;
            padding: 20px;
            text-align: right;
            font-size: 28px;
            font-weight: bold;

        }

        .totale {
            font-size: 1.2em;
            border-top: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="box">
        <?php

        function somma(int $num1, int $num2): int

        {
            if ($num1 == 0 && $num2 == 0) {

                echo "<p>0 +</p>";
                echo "<p>0 =</p>";
                echo "<p class=\"totale\"><strong>0</strong></p>";

                return 0;
            } else {

                $totale = $num1 + $num2;


                echo "<p>" . $num1 . " +</p>";
                echo "<p>" . $num2 . " =</p>";
                echo "<p class=\"totale\"><strong>" . $totale . "</strong></p>";

                return $totale;
            }
        }

        $risultato = somma(12, 15);

        ?>
    </div>
</body>

</html>