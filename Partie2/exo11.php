<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 11</title>
</head>
<body>

<h1>Exercice 11</h1>

<p>Écrire une fonction personnalisée qui affiche une date en 
    français à partir d'une chaîne représentant une date.</p>

<h2>Résultat</h2>

<?php
function formaterDateFr($date) {
    // Convertir la date en timestamp
    $timestamp = strtotime($date);

    // Définir les jours en français
    $jours = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
    // Définir les mois en français
    $mois = ["", "janvier", "février", "mars", "avril", "mai", "juin", "juillet",
     "août", "septembre", "octobre", "novembre", "décembre"];

    // Extraire le jour de la semaine (0=dimanche, 1=lundi, etc.)
    $jourSemaine = $jours[date("w", $timestamp)];
    // Extraire le jour du mois (23, etc.)
    $jour = date("d", $timestamp);
    // Extraire le mois (01, 02, etc.) puis trouver son nom en français
    $moisNom = $mois[date("n", $timestamp)];
    // Extraire l'année (2018, etc.)
    $annee = date("Y", $timestamp);

    // Afficher la date formatée
    echo "$jourSemaine $jour $moisNom $annee";
}

// Exemple
formaterDateFr("2018-02-23");
?>

</body>
</html>