<?php

$captcha_image_height = 50;
$captcha_image_width = 130;
$captcha_image = @imagecreate(
	$captcha_image_width,
	$captcha_image_height
	);
$background_color = imagecolorallocate(
	$captcha_image,
	255,
	255,
	255
	);
header('Content-Type: image/jpeg'); 
imagejpeg($captcha_image);


?>