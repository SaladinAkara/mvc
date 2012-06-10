<?php

class View
{

	function __construct()
	{
		echo 'this is the view';
	}

	public function render($name)
	{
		require 'view/' . $name . '.php';
	}
}