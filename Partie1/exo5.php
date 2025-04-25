<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>

<h1>Exercice 5</h1>

<p>Écrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php
$francs = 100;
$tauxConversion = 6.55957;
$euros = round($francs / $tauxConversion, 2);

echo "Montant en francs : $francs<br>";
echo "$francs francs = $euros €";
?>

</body>
</html>