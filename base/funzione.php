<?php

/*

function nomeF(){
    echo"testo"
} 
*/


function saluta(string $nome, string $lingua = "it"): string
{
    return match ($lingua) {
        "en" => "Hello $nome",
        "fr" => "Bonjour $nome",
        "sp" => "BuenosDias $nome",
        default => "Ciao $nome"
    };
}



//
echo saluta("Moussa");          // Ciao Moussa
echo "<br><br>";
echo saluta("Moussa", "en");    // Hello Moussa
