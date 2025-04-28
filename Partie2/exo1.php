<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>

<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<h2>Résultat</h2>

<?php
function convertirMajRouge($texte) {
    echo "<span style='color: red;'>" . strtoupper($texte) . "</span>";
}

$texte = "Mon texte en paramètre";
convertirMajRouge($texte);
?>


// Voir correction recu

</body>
</html>

