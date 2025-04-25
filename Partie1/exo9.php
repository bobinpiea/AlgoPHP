<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>

<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de 
    son âge et de son sexe.</p>

<h2>Résultat</h2>

<?php
$age = 32;
$sexe = "F";

echo "Age : $age<br>";
echo "Sexe : $sexe<br>";

if (($sexe === "F" && $age >= 18 && $age <= 35) || ($sexe === "M" && $age > 20)) {
    echo "La personne est imposable.";
} else {
    echo "La personne n'est pas imposable.";
}
?>

</body>
</html>