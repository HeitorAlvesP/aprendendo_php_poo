<?php

    echo "Bem vindo ao Screen Match \n";

    $nomeFilme = "Top Gun-Mavercik";
    $anoDeLancamento = 2022;
    $incluido = $planoPrime || $anoDeLancamento < 2020;
    $planoPrime = true;

    $notasFilmes = [3, 5, 7, 8];
    $mediaNotas = array_sum($notasFilmes) / count($notasFilmes);
    echo "A nota é: $mediaNotas\n";

    echo "Nome do Filme: $nomeFilme";


?>