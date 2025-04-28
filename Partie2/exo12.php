<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 12</title>
</head>
<body>

<h1>Exercice 12</h1>

<p>Afficher les informations des variables contenues dans un tableau à l’aide d’une boucle.</p>

<h2>Résultat</h2>

<?php
$tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];

foreach ($tableauValeurs as $valeur) {
    var_dump($valeur);
}
?>

</body>
</html>