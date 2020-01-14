<?php
require 'vendor/autoload.php';
use Intervention\Image\ImageManagerStatic as Image;
Image::configure(array('driver' => 'imagick'));
// create empty canvas with black background
$img = Image::canvas(120, 90, '#000000');

// fill image with color
$img->fill('#b53717');

// backup image with colored background
$img->backup();

// fill image with tiled image
//$img->fill('image.png');

// return to colored background
//$img->reset();