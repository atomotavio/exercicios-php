<?php

// nao usar aspas duplas consome ram

$name = "eloisa";
$age = 20;
$city = 'itu';
$weight = 90.5;
$vacine = true;
$date = '21/05/45';

//echo $name . '</br>' . $age .'</br>' . $city . '</br>'. $weight . '</br>'. $vacine .'</br>' . $date;

$person = [
    'name' => 'eloisa',
    'age' => 20,
    'city' => 'itu',
    'weight' => 90.5,
    'vacine' => true,
    'date' => '05-21-1945'
];

$person2 = [
    'name' => 'mariana',
    'age' => '20',
    'city' => 'itu',
    'weight' => 70.5,
    'vacine' => true,
    'date' => '05-21-2000'
];

if ($person["age"] != $person2["age"]) {
    echo 'mesma idade';
} elseif ($person["city"] != $person2["city"]) {
    echo 'mesma cidade';
} else {
    echo 'nao sao irmas';
}
echo '<br>';
// while, do while, for, foreach

$bicho = [00, 12, 23, 58, 78, 98];
$contador = 0;

while ($contador < count($bicho)) {
    echo $bicho[$contador];
    echo '<br>';

    $contador += 2;
}

$contador = 0;

do {
    echo '<br>' . 'puta';
    $contador++;
} while ($contador < 1);

for ($i = count($bicho) - 1; $i > 0; $i--) {
    echo '<br>';
    echo $bicho[$i];
}


foreach ($person as $element){
    echo '<br>';
    echo $element;
}

foreach ($person as $key => $element){
    echo '<br>';
    echo $key . ': ' . $element;
}

echo '<br>';

$a = 2;
$b = 3;
$c = $a + $b;
echo '<br>';
echo $c;
if(($c%2) == 0) {
    echo 'par';
} else {
    echo 'impar';
}

$c = $a - $b;
echo '<br>';
echo $c;
$c = $c%2;
if($c == 0) {
    echo 'par';
} else {
    echo 'impar';
}

$c = $a * $b;
echo '<br>';
echo $c;
$c = $c%2;
if($c == 0) {
    echo 'par';
} else {
    echo 'impar';
}

$c = $a / $b;
echo '<br>';
echo $c;
$c = $c%2;
if($c == 0) {
    echo 'par';
} else {
    echo 'impar';
}

