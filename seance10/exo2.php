<!DOCTYPE html>
<?php
$fichier = fopen("comics.csv", "a+");
?>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <table border="1px solid">
        <tbody>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Titre</th>
                    <th>Prix</th>
                    <th>Nb pages</th>
                    <th>Collection</th>
                </tr>
            </thead>
            <tr>
                <?php
                while($ligne=fgetcsv($fichier,1024,';')) {
                    $champs = count($ligne);//nombre de champ dans la  → ligne en question

                    echo "<tr>";
                    //affichage de chaque champ de la ligne en  → question
                    for($i=0; $i<$champs; $i ++) {
                        echo '<td>'.$ligne[$i].'</td>';
                    }
                    echo "</tr>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>

<?php
fclose($fichier);
?>
