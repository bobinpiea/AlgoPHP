<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6</title>
</head>
<body>

<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>

<h2>Résultat</h2>

<?php
function alimenterListeDeroulante($elements) {
    echo "<select>";
    foreach ($elements as $element) {
        echo "<option>" . $element . "</option>";
    }
    echo "</select>";
}

$elements = ["Monsieur", "Madame", "Mademoiselle"];
alimenterListeDeroulante($elements);
?>

</body>
</html>