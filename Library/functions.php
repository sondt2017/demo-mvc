<?php
function Header404($msg=''){

	$temp_404 = __DIR__.'/../404.html';
	$content = file_get_contents($temp_404);
	$content = str_replace('{$msg}', $msg , $content);
	die($content); 
	// Có cách khác là chuyển trang sang trang 404 nhưng để sau! 
}