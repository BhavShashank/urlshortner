<?php
	session_start();
	require_once 'classes/shortener.php';
	$s = new Shortener;
	if (isset($_POST['url'])) {
		$url = $_POST['url'];
		if ($code = $s->makeCode($url)) {
			$_SESSION['feedback'] = "Generated! Your short URL is : <a href=\"http://localhost:8080/urlshort/{$code}\">http://localhost:8080/urlshort/{$code}</a>";
		} else {
			$_SESSION['feedback'] = 'Problem processing URL.';
		}
	}
	header('Location: index.php');