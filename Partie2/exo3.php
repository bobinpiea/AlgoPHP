<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 2 – Exercice 3</title>
</head>
<body>

<h1>Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation.
     Le lien doit s’ouvrir dans un nouvel onglet et 
     inclure </p>

<h2>Résultat</h2>

<?php
echo '<a href="https://www.elan-formation.fr" target="_blank" rel="noopener noreferrer">'
    . 'Visiter Elan Formation'
    . '</a>';
?>

</body>
</html>