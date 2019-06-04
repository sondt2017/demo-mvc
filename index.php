<?php
define('app_path', __DIR__);
echo 'Trang chu';
// Nhúng thư viện 
require_once app_path.'/Library/functions.php';

// Header404("Loi 404");

require_once __DIR__.'/Core/App.php';
$objApp = new App();
$objApp->run();