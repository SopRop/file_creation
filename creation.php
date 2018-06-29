<?php

session_start();

$newpage = $_SESSION['newpage'] = $_POST['newpage'];

if (file_exists($newpage)) {
    echo "Le fichier -- $newpage -- existe déjà.";
    echo "<br>";
    echo "Voulez-vous y avoir accès ?";
    echo "<br>";

    echo "<form action='liste.php'>";
    echo "<input type='submit' value='Oui'>";
    echo "</form>";

    echo "<form action='index.php'>";
    echo "<input type='submit' value='Non'>";
    echo "</form>";
} else {
    $createFile = fopen($newpage, 'a');
    echo "La page $newpage a bien été créé.<br>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="./liste.php">Voir la liste des pages</a> 
</body>
</html>