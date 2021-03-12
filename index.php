<?php

// include composer autoload
require 'vendor/autoload.php';

//import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// and you are ready to go...
$image = Image::make('img/Untitled.png')->resize(1024, 768)->save('img/Untitled2.png',100);

echo '<img src="img/Untitled2.png" alt="" />';
echo '<p>Dòng này được thêm từ github</p>';
echo '<p>Dòng 2 này được thêm từ github. Tạo conflict từ local</p>';
echo '<p>Dòng 3 này tạo để minh hoạ create pull request</p>';
echo '<p>Dòng 4 này tạo để minh hoạ create pull request</p>';
