<?php

class Error extends Controller
{

	function __construct()
	{
		parent::__construct();
		echo '<br>this is an error';
		
		$this->view->msg = 'This page does not exist!';
		$this->view->render('error/index');
	}

}