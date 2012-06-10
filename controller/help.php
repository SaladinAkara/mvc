<?php

class Help extends Controller
{

	function __construct()
	{
		parent::__construct();
		echo '<br>We are in the help controller';
	}

	public function other($arg = false)
	{
		echo '<br>We are inside the \'other\' function of help ';
		if($arg != null)
		echo 'with optional: ' . $arg;
		
		require 'model/help_model.php';
		$model = new Help_Model();
	}
}