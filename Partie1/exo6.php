<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>

<h1>Exercice 6</h1>

<p>Écrire un algorithme permettant de calculer un montant de facture à régler 
    à partir de la quantité d’articles, son prix hors taxe et un taux de TVA 
    (exprimé en décimal).</p>

<h2>Résultat</h2>

<?php
$prixHT = 9.99; 
$quantite = 5;
$tauxTVA = 0.2;

$montantHT = $prixHT * $quantite;
$montantTTC = round($montantHT * (1 + $tauxTVA), 2);

echo "Prix unitaire de l’article : $prixHT €<br>";
echo "Quantité : $quantite<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de : $montantTTC €";
?>

</body>
</html>