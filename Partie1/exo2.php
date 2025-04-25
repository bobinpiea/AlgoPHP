<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>À partir de la phrase de l’exercice 1, écrire l’instruction permettant 
    de compter le nombre de mots contenus dans celle-ci.</p>

<h2>Résultat</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nombreMots = str_word_count($phrase);
echo "La phrase « $phrase » contient $nombreMots mots.";
?>

</body>
</html>