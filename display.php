<?php

$readPage = file_get_contents($_GET['filename']);
echo $readPage;

echo "<br>";
echo "<br><a href='./liste.php'>Retour</a><br>";

?>