<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

// Correction 

<h1>Exercice 4</h1>

<p>Écrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>

<?php
$phrase = "Engage le jeu que je le gagne";

// On enlève les espaces et on met tout en minuscules
$phraseNettoyee = strtolower(str_replace(' ', '', $phrase));

// On inverse la phrase nettoyée
$phraseInversee = strrev($phraseNettoyee);

// Vérification si la phrase est égale à son inverse
if ($phraseNettoyee === $phraseInversee) {
    echo "La phrase « $phrase » est palindrome";
} else {
    echo "La phrase « $phrase » n'est pas palindrome";
}
?>

</body>
</html>