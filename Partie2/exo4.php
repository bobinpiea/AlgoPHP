<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

<h1>Exercice 4</h1>

<p>À partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
    le lien hypertexte de la page Wikipédia de la capitale.</p>

<h2>Résultat</h2>

<?php
$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
    "Espagne" => "Madrid"
];

function afficherTableHTML($capitales) {
    ksort($capitales);
    echo "<table border='1'>";
    echo "<tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>";

    foreach ($capitales as $pays => $capitale) {
        echo "<tr>";
        echo "<td>" . strtoupper($pays) . "</td>";
        echo "<td>" . $capitale . "</td>";
        echo "<td><a href='https://fr.wikipedia.org/wiki/" . $capitale . "' target='_blank'>Lien</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}

afficherTableHTML($capitales);
?>

</body>
</html>