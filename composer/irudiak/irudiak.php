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
$image = Image::make('image.jpg')->resize(300, 200);
//// finally we save the image as a new file
//$image->save('eibar2.jpg');
//
