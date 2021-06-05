<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP Heritage</title>
</head>
<body>
    <?php 
        require("autoload.php");
    ?>
    <?php
        $perso1 = new Magicien(["nom" => "Metros"]);
        $perso2 = new Magicien(["nom" => "Bob"]);
        $perso1->infos();
        echo "<br>";
        $perso2->infos();
        echo "<br>";
        $perso1->frapper($perso2);
    ?>
</body>
</html>