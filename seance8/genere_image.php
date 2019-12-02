<?php
header ("Content-type: image/png");
$im = imagecreate(800, 600);
$fond = imagecolorallocate($im, 200, 200, 200);
$couleur = imagecolorallocate($im, 0, 0, 255);
$noir = imagecolorallocate($im, 0, 0, 0);
$blanc = imagecolorallocate($im, 255, 255, 255);
$rouge = imagecolorallocate($im, 255, 0, 0);
imagefill($im, 0, 0, $fond);
for ($i=0; $i <= 100; $i++) {
    Imagefilledrectangle($im, rand(0,800), rand(0,600), rand(0,800), rand(0,600), rand(0,255));
}
$font = './arial.ttf'; $texte = 'Bonjour !';
imagettftext($im, 48, 0, 400, 300, $blanc, $font, $texte);
imagepng($im); imagedestroy($im);
?>
