<?php
header('Content-Type: image/png');
session_start();
$image = imagecreatetruecolor(360, 60);
$bgcolor = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $bgcolor);
for ($i = 0;$i < 1000;$i++) {
    $pointcolor = imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    imagesetpixel($image, rand(0, 359), rand(0, 59), $pointcolor);
}
for ($i = 0;$i < 10;$i++) {
    $linecolor = imagecolorallocate($image, rand(100, 200), rand(100, 200), rand(100, 200));
    imageline($image, rand(0, 359), 0, rand(0, 359),  59, $linecolor);
}

$bgcolor = imagecolorallocate($image, rand(100, 200), rand(100, 200), rand(100, 200));
$x = rand(30, 300);
$_SESSION['code'] = $x;
$x2 = $x + 30;
imagefilledrectangle($image, $x, 15, $x2, 45, $bgcolor);
imagepng($image);
imagedestroy($image);
?>
