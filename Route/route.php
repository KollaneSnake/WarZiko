<?php

	$uri = $_SERVER['REQUEST_URI'];
	$uri = explode('?', $uri)[0];
	echo $uri."<br>";
	$personal_uri = '/'. explode('/', $uri)[1]. '/'. explode('/', $uri)[2];
	echo $personal_uri."<br>";

	if ($uri == $personal_uri OR $uri == $personal_uri.'index.php'){
		$response = startPage();
	}
	elseif ($uri == $personal_uri.'news') {
		$response = newsPage();
	}
	elseif ($uri == $personal_uri.'games') {
		$response = gamesPage();
	}
	elseif ($uri == $personal_uri.'contact') {
		$response = contactPage();
	}
	elseif ($uri == $personal_uri.'about') {
		$response = aboutPage();
	}
	else{
		//ErrorPage
		$response = startpage();
	}
	?>