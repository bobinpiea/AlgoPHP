<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>

<h1>Exercice 3</h1>

<p>À partir de la phrase de l’exercice 1, écrire l’instruction permettant 
    de remplacer le mot « aujourd’hui » par le mot « demain ». Afficher 
    l’ancienne et la nouvelle phrase.</p>

<h2>Résultat</h2>

<?php
$phrase = "Notre formation DL commence aujourd'hui";
$nouvellePhrase = str_replace("aujourd'hui", "demain", $phrase);

echo "Ancienne phrase : « $phrase »<br>";
echo "Nouvelle phrase : « $nouvellePhrase »";
?>

</body>
</html>