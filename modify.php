<?php

$txt = $_SESSION['appendix'] = $_POST['appendix'];

$base = fopen($_GET['filename'], "w+");
fwrite($base, "\n". $txt);
fclose($base);

$result = file_get_contents($_GET['filename']);
echo "Nouveau contenu du fichier -- " . $_GET['filename'] . " -- :<br> ";
echo "<br>";
echo $result;

echo "<br>";
echo "<br><a href='./liste.php'>Retour</a><br>";
?>