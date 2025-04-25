<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 11</title>
</head>
<body>

<h1>Exercice 11</h1>

<p>Initialiser un tableau de marques de voitures. 
    Écrire un algorithme permettant de parcourir ce tableau et d’en afficher 
    le contenu (une marque par ligne). Afficher aussi le nombre de marques présentes.</p>

<h2>Résultat</h2>

<?php

// création du tableau  (est-ce mieux ça ou la fonction tableau ? )
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

// On compte les éléments
$nbMarques = count($marques);

// On affiche le nombre
echo "Il y a $nbMarques marques de voitures dans le tableau :<br>";

// On affiche chaque marque 
foreach ($marques as $marque) {
    echo $marque . "<br>";
}
?>
  
</body>
</html>