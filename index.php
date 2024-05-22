<?php 

function pelican_game(int $n) {
    // Gestion des erreurs
    if ($n < 60 || $n > 360) {
        echo "Valeur impossible\n";
        return;
    }

    $total = $n + 43;

    if ($total % 32 == 0) {
        $total = intval($total / 8);
    } elseif ($total % 6 == 0) {
        $total = intval($total / 3);
    } else {
        $total -= 42;
    }
    // Réduire le total à la dizaine inférieure
    $dizaineInferieure = intval($total / 10) * 10;
    
    // Affichage des "Nigel"
    $nigelCount = ($total - $dizaineInferieure) + 1;
    for ($i = 1; $i <= $nigelCount; $i++) {
        echo "Nigel $i\n";
    }

    // Calcul et affichage du score final
    $score = intval(($n + 43 - $dizaineInferieure) / 100);
    echo "Score : $score\n";
}