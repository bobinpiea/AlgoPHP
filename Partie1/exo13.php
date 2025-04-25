<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 13</title>
</head>
<body>

<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées 
    dans un tableau (pas de coefficient). 
    Elle devra être affichée avec 2 décimales.</p>

<h2>Résultat</h2>

<?php
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

// Nombre de notes
$nbNotes = count($notes);

// Somme des notes
$somme = array_sum($notes);

//  arrondie à 2 décimales
$moyenne = round($somme / $nbNotes, 2);

// Affichage
echo "Les notes obtenues par l'élève sont : " . implode(' ', $notes) . "<br>";
echo "Sa moyenne générale est donc de : $moyenne";
?>
  
</body>
</html>