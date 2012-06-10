<?php

class Bootstrap
{

	function __construct()
	{
		if(isset($_GET['url']))
		{
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);
		}
		else
		{
			$url = "index";
		}

		echo "We are in Index and the url is " . $url[0];
		
		$file = 'controller/' . $url[0] . '.php';
		if(file_exists($file))
		{
			require $file;
		}
		else
		{
			require 'controller/error.php';
			$controller = new Error();
			return false;
		}
		
		$controller = new $url[0];

		if(isset($url[2]))
		{
			$controller->{$url[1]}($url[2]);
		}
		else
		{
			if(isset($url[1]))
			{
				$controller->{$url[1]}();
			}
		}
	}

}