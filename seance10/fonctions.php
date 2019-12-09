<?php
    // Connexion bdd
    function connect_bdd($bdd) {
        include("config.inc.php");
        $bdd = new PDO('mysql:host=localhost;dbname=dutaf2', $user, $pass);
        return $bdd;
    }
 ?>
