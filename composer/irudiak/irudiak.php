<?php
// include composer autoload
//require __DIR__ . '/vendor/autoload.php';
require 'vendor/autoload.php';
// http://image.intervention.io/
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;
// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));
// and you are ready to go ...
//$image = Image::make('image.jpg')->resize(300, 200);
//// finally we save the image as a new file
//$image->save('eibar2.jpg');
//
// open an image file
$img = Image::make('image.jpg');

// resize image instance
//$img->resize(840, 851);
$img->rotate(-180);
$img->insert('watermark.png');
$img->rotate(-180);
//$img = Image::canvas(800, 600, '#ccc');



$img->encode('png');
$type = 'png';
$base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);

echo "<img src=$base64>";