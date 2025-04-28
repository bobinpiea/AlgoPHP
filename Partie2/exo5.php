<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>

<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs 
    de texte en précisant le nom des champs associés.</p>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];


function afficherInput($inputs) {
    echo "<form>";

    foreach ($inputs as $input) {
        echo "<label>$input</label><br>";
        echo "<input type='text' name='$input'><br><br>";
    }

    echo "</form>";
}


afficherInput($nomsInput);
?>

</body>
</html>