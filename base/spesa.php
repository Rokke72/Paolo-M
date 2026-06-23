<?php
  
  $spesa = [
        "Pomodori",    
        "Zucchine",
        "Peperoni", 
        "Latte",  
        "Pasta",   
        "Polpa di pomodoro",  
        "Pane",  
        "Vino",
        "Biscotti",
        "Marmellata"
    ];

    $totaleSpesa = count($spesa);
        echo "Da comprare: ";
    for ($i = 0; $i < $totaleSpesa; $i++){

        echo "<li>" . $i . ") " . $spesa[$i] . "</li>";
    }