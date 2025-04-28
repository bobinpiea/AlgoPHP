<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10</title>
</head>
<body>

<h1>Exercice 10</h1>

<p>Créer un formulaire complet contenant nom, prénom, email, ville, sexe, formation, et un bouton submit.</p>

<h2>Formulaire</h2>

<?php
function afficherInput($champs) {
    foreach ($champs as $champ) {
        echo '<label>' . $champ . '</label><br>';
        echo '<input type="text" name="' . strtolower($champ) . '"><br><br>';
    }
}

function afficherRadio($nomsRadio) {
    foreach ($nomsRadio as $nom) {
        echo '<input type="radio" name="sexe" value="' . $nom . '"> ' . $nom . '<br>';
    }
}

function alimenterListeDeroulante($formations) {
    echo '<select name="formation">';
    foreach ($formations as $formation) {
        echo '<option value="' . $formation . '">' . $formation . '</option>';
    }
    echo '</select><br><br>';
}

// Champs de texte
$nomsInput = ["Nom", "Prénom", "Email", "Ville"];
afficherInput($nomsInput);

// Boutons radio
$nomsRadio = ["Masculin", "Féminin", "Autre"];
afficherRadio($nomsRadio);

echo "<br>";

// Liste déroulante
$formations = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];
alimenterListeDeroulante($formations);

// Bouton submit
echo '<br><br><input type="submit" value="Envoyer">';
?>

</body>
</html>