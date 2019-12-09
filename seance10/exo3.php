<?php
include('fonctions.php');
$req = 'SELECT * FROM Fournisseurs';
$resultat = connect_bdd()->query($req);

$fichier = fopen("exo3.csv", "a+");
$ligne = 1; // compteur de ligne $fichier = fopen("fichier.csv", "a+");

while ($ligne = $resultat->fetch())

 {
    array($ligne);
}

fputcsv($fichier, $tableau, ";");

fclose($fichier);
?>
