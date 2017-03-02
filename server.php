<?php
	$raw  = '';
	
	/*
    $httpContent = fopen('php://input', 'r');
	while ($kb = fread($httpContent, 1024)) {
		$raw .= $kb;
	}
	fclose($httpContent);
	*/
	
	$raw = file_get_contents("php://input");
	$arr = explode("!!!", $raw);
	// $arr[0] filename;
	// $arr[1] xml string;
	file_put_contents($arr[0], $arr[1]);
?>
