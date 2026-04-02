<?php

$holes = [
    "hole 1" => 3, 
    "hole 2" => 4, 
    "hole 3" => 5, 
    "hole 4" => 2
    ];

$score = 0;
$scores = [];
$spelers = 0;

echo "Hoeveel spelers doen er mee?" . PHP_EOL;
$spelers = (int)readline("");
if ($spelers < 2) {
    echo "Er moeten minimaal 2 spelers zijn." . PHP_EOL;
    exit;
} else {
    for ($i = 1; $i <= $spelers; $i++) {

        foreach ($holes as $hole => $par) {

                echo "Score speler $i op $hole: ";
                $aantalSlagen = (int)readline("") . PHP_EOL;
                $score = $aantalSlagen - $par;
                $scores += [$hole => $score];

                $scores[] = ["speler $i" => $score];
        }
    }
    // var_dump($scores);
    for ($j = 0; $j <= $spelers; $j++){
        for ($k = 0; $k <= $holes; $k++){
            $totaal += $scores[$j][$k];
        }
        echo "Speler $i's score is: $totaal";
    }
}

