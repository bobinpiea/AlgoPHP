<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

<h1>Exercice 8</h1>

<p>Écrire un algorithme qui renvoie la table de multiplication 
    d’un nombre passé en paramètre.  
Remarque : proposer 2 solutions avec 2 types de boucles.</p>

<h2>Résultat</h2>

<?php
$nombre = 8;

echo "Table de $nombre :";

echo "Avec une boucle for :";
for ($i = 1; $i <= 10; $i++) {
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat";
}

echo "Avec une boucle while :";
$j = 1;
while ($i <= 10) {
    $resultat = $i * $nombre;
    echo "$i x $nombre = $resultat";
    $i++;
}
?>

</body>
</html>