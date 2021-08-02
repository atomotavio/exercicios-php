<?php

$jose = [
    'nome completo' => 'Jose antonio trindade',
    'genero' => 'masculino',
    'data de nascimento' => '09-11-1974',
    'tipo sanguineo' => 'A+',
    'peso' => 80,
    'altura' => 1.73,
    'IMC' => 0,
    'idade' => 47

];

$eloisa = [
    'nome completo' => 'Eloisa de carvalho trindade',
    'genero' => 'feminino',
    'data de nascimento' => '12-21-2000',
    'tipo sanguineo' => 'A+',
    'peso' => 50,
    'altura' => 1.60,
    'IMC' => 0,
    'idade' => 20

];

$jose["IMC"] = $jose["peso"]/($jose["altura"]*$jose["altura"]);
$eloisa["IMC"] = $eloisa["peso"]/($eloisa["altura"]*$eloisa["altura"]);

foreach ($jose as $key => $element){
    echo '<br>';
    echo $key . ': ' . $element;
}

foreach ($eloisa as $key => $element){
    echo '<br>';
    echo $key . ': ' . $element;
}

if ($jose['IMC'] >= 30 || $eloisa['IMC'] >= 30) {
    echo 'não está apto ao transplante';
    echo '</br>';
}elseif ($jose['idade'] < 18 || $eloisa['idade'] < 18) {
    echo 'não está apto ao transplante';
    echo '</br>';
}elseif ($jose['tipo sanguineo'] !== $eloisa['tipo sanguineo']) {
    echo 'não está apto ao transplante';
    echo '</br>';
}else {
    echo '</br>';
    echo 'Parabens voce pode realizar o transplante!';
}