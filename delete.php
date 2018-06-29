<?php

unlink($_GET['filename']);
echo "Le fichier -- " . $_GET['filename'] . " -- a bien été supprimé.<br>";

echo "<br><a href='./liste.php'>Retour</a>";

?>