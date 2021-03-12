<?php

// include composer autoload
require 'vendor/autoload.php';

//import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// and you are ready to go...
$image = Image::make('img/Untitled.png')->resize(1024, 768)->save('img/Untitled2.png',100);

echo '<img src="img/Untitled2.png" alt="" />';
echo '<p>Dòng này được thêm từ github</p>';
echo '<p>Dòng 2 này được thêm từ github. Thêm đoạn tạo conflict</p>';
