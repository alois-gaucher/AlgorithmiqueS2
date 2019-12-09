<?php
// 1 : on ouvre le fichier
$monfichier = fopen('exemple.txt', 'r+');

// 2 : on fera ici nos opérations sur le fichier...
while(!feof($monfichier)) {
  $ligne = fgets($monfichier);
  echo $ligne.'</br>';
}

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>
