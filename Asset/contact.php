<!DOCTYPE html>
<html lang="fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100%, initial-scale=1.0">
    <title>contact</title>
</head>
<body>

<?php

    $retour = mail("adam.auclair@outlook.fr","Formulaire","","");
    //miauclai@gmail.com
    if ($retour) {
    echo "<p>L'email a bien été envoyé.</p>";
    }
?>

</body>
</html>
