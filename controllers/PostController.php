<?php
namespace controllers;

use controllers\BaseController;

class PostController extends BaseController
{
	

	function request() 
	{
		$data = $this->mysql->select("SELECT * FROM article");
		print_r($data);
	}
}

?>