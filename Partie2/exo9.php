<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>

<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre.</p>

<h2>Résultat</h2>

<?php
function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nom) {
        echo '<input type="radio" name="genre" value="' . $nom . '"> ' . $nom . '<br>';
    }
}

$nomsRadio = ["Masculin", "Féminin", "Autre"];

afficherRadio($nomsRadio);
?>

</body>
</html>