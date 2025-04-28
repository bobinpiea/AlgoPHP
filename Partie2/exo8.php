<h1>Exercice 8</h1>

<p>Créer une fonction personnalisée permettant 
    d’afficher l’image N fois à l’écran.</p>

<h2>Résultat</h2>

<?php
function repeterImage($url, $n,) {
    for ($i = 0; $i < $n; $i++) {
        echo '<img src="  " '  . $url .  ' ><br>';
    }
}

$url = "http://my.mobirise.com/data/userpic/764.jpg";

repeterImage($url, 4);


?>