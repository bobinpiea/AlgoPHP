<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <br>
$capitales = [
    "France" => "Paris", 
    "Allemagne" => "Berlin", 
    "USA" => "Washington", 
    "Italie" => "Rome"
];  <br>

Réaliser un algorithme permettant d’afficher le tableau HTML trié par ordre 
alphabétique du nom de pays, avec les noms de pays en majuscules.</p>

<h2>Résultat</h2>

  <!-- Correction & Commentaire  -->

<?php

// Ici c'est un tableau associatif, càd un tableau ave une clé et une valeur 
// Syntaxe : $key => $valeur;
//  la clé doit etre unique - La valeur peut etre multiple mais pas la clé
// Autre facon de  rédiger un tableau : $capitales = array() - mais mtn on privilégie la seconde
// les crochets, plus lisible et plus consensuel 

$capitales = [
    "France" => "Paris", 
    "Allemagne" => "Berlin", 
    "USA" => "Washington", 
    "Italie" => "Rome",
];

// Tableau associatif ci-dessus 

echo "<ul>";
foreach($capitales as $pays => $capitale) {
    echo "<li>$pays a pour capitale : $capitale </li>"; 
}
echo "</ul>";

echo afficherTableHTML($capitales);  // Nom de la fonction

function afficherTableHTML($capitales) {
    ksort($capitales); // Trier le tableau dans l'ordre alphabétique de A à Z sur la clé
    $result = "<table border=1>
                 <thead>
                       <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                </thead>
            <tbody>";

    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>" . mb_strtoupper($pays). "</td>
                        <td>" . ucfirst($capitale) . "</td>
                    </tr>";
    }
    $result .= "</tbody></table>";
    return $result;
}










