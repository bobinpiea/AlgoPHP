<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

<h1>Exercice 2</h1>

<p>Soit le tableau suivant :
$capitales = 
[
"France" => "Paris", 
"Allemagne" => "Berlin", 
"USA" => "Washington", 
"Italie" => "Rome"
];

Réaliser un algorithme permettant d’afficher le tableau HTML trié par ordre 
alphabétique du nom de pays, avec les noms de pays en majuscules.

<h2>Résultat</h2>

<?php
function afficherTableHTML($capitales) {
 
    ksort($capitales);

    echo "<table border='1'>";
    echo "<tr><th>Pays</th><th>Capitale</th></tr>";

    foreach ($capitales as $pays => $capitale) {
        echo "<tr>";
        echo "<td>" . strtoupper($pays) . "</td>";
        echo "<td>" . $capitale . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

$capitales = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
];

afficherTableHTML($capitales);
?>

// 
</body>
</html>