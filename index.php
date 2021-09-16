<?php
#var_dump($_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_URI'] === '/csrf_cat.png') {
	header("Content-Type: text/html");
	require __DIR__.'/CSRF.php';
} else if ($_SERVER['REQUEST_URI'] === '/xss_cat.png') {
	header("Content-Type: text/html");
	require __DIR__.'/XSS.php';
} else if ($_SERVER['REQUEST_URI'] === '/foto.jpg') {
	header("Content-Type: image/jpeg");
	echo file_get_contents(__DIR__.'/foto.jpg');
} else {
	file_put_contents(__DIR__."/cookies.txt", $_SERVER['REQUEST_URI'].PHP_EOL, FILE_APPEND);
}
