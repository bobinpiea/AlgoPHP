<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. 
    On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>

<h2>Résultat</h2>

<?php
function genererCheckbox($elements) {
    foreach ($elements as $texte => $estCoche) {
        echo '<input type="checkbox" name="choix[]"';
        if ($estCoche) {
            echo ' checked';
        }
        echo '> ' . $texte . '<br>';
    }
}

$elements = [
    "Choix 1" => false,
    "Choix 2" => true,
    "Choix 3" => false
];

genererCheckbox($elements);
?>

</body>
</html>