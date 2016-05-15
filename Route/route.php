<?php

	$uri = $_SERVER['REQUEST_URI'];
	$uri = explode('?', $uri)[0];
	//echo $uri."<br>";
	$personal_uri = '/'. explode('/', $uri)[1]. '/'. explode('/', $uri)[2];
	//echo $personal_uri."<br>";

	if ($uri == $personal_uri OR $uri == $personal_uri.'index.php'){
		$response = startpage();
	}
	?>