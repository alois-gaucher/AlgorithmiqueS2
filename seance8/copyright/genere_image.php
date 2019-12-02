<?php
header ("Content-type: image/jpg");
$filename = "uploads/".$_GET['image'];
$im = imagecreatefromjpeg($filename);
$imagex = imagesx($im);
$imagey = imagesy($im);
$taille_image = ($imagex * $imagey);
$fond = imagecolorallocate($im, 200, 200, 200);
$couleur = imagecolorallocate($im, 0, 0, 255);
$noir = imagecolorallocate($im, 0, 0, 0);
$blanc = imagecolorallocate($im, 255, 255, 255);
$rouge = imagecolorallocate($im, 255, 0, 0);
$font = './arial.ttf'; $texte = '© Aloïs GAUCHER';
$copyrightx = 10;
$copyrighty = $imagey - 10;
imagettftext($im, $imagey * 0.03, 0, $copyrightx, $copyrighty, $blanc, $font, $texte);
imagepng($im); imagedestroy($im);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <?php
    echo '<img src="genere_image.php" alt="mon image" />'; ?>
</body>
</html>
