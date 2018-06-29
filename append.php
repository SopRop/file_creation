<?php

echo "<form action='./modify.php?filename=" . $_GET['filename'] . "' method='POST'>";
echo "<label for='appendix'>Texte à ajouter :</label>";
echo "<br>";
echo "<textarea name='appendix'></textarea>";
echo "<br>";
echo "<input type='submit' value='Modifier'>";
echo "</form>";

echo "<br>";
echo "<a href='./liste.php'>Retour</a><br>";

?>