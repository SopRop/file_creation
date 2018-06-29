<?php

echo "Liste des pages :<br>";
echo "<br>";

$excluded = array('index.php', 'delete.php', 'creation.php', 'liste.php', 'modify.php', 'display.php', 'append.php');

foreach (new DirectoryIterator(__DIR__) as $file) {
    if ($file->isFile() && (! in_array($file, $excluded))) {
        echo $file->getFilename() . "";
        echo " > <a href='./display.php?filename=" . $file->getFilename() . "'>Afficher</a>";
        echo " > <a href='./append.php?filename=" . $file->getFilename() . "'>Modifier</a>";
        echo " > <a href='./delete.php?filename=" . $file->getFilename() . "'>Supprimer</a><br>";
    }
  }

?>