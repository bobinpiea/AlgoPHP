<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 12</title>
</head>
<body>

//Correction

<h1>Exercice 12</h1>

<p>À partir d’une fonction personnalisée et d’un tableau associatif prénom ⇒ langue,
    dire bonjour dans la bonne langue en utilisant un switch. Variante : 
        tri alphabétique des prénoms.</p>

<h2>Résultat</h2>

<?php

function direBonjour($prenom, $lang) {
    switch ($lang) {
        case 'FRA':
            $salutation = 'Salut';
            break;
        case 'ENG':
            $salutation = 'Hello';
            break;
        case 'ESP':
            $salutation = 'Hola';
            break;
        default:
            $salutation = 'Bonjour';
    }
    return "$salutation $prenom";
}


$personnes = [
    'Mickaël'      => 'FRA',
    'Virgile'      => 'ESP',
    'Marie-Claire' => 'ENG'
];


foreach ($personnes as $prenom => $lang) {
    echo direBonjour($prenom, $lang) . "<br>";
}

echo "<br>Tri alphabétique :<br>";
$personnesTriees = $personnes;
ksort($personnesTriees);
foreach ($personnesTriees as $prenom => $lang) {
    echo direBonjour($prenom, $lang) . "<br>";
}
?>

</body>
</html>