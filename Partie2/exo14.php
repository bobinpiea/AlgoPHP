<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification e-mail</title>
</head>
<body>

<h1>Vérification d'une adresse e-mail</h1>

<?php
$email1 = "elan@elan-formation.fr";
$email2 = "contact@elan";

function verifierEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "L’adresse <strong>$email</strong> est une adresse e-mail valide.<br>";
    } else {
        echo "L’adresse <strong>$email</strong> est une adresse e-mail invalide.<br>";
    }
}

verifierEmail($email1);
verifierEmail($email2);
?>

</body>
</html>