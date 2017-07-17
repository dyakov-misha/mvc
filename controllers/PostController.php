<?php
namespace controllers;

use models\Mysql;
use controllers\BaseController;

class PostController extends BaseController
{
	

	function request() 
	{
		$data = $this->mysql->select("SELECT * FROM article");
		echo $this->render('views',[
			'data' =>$data
			]);
	}
}

?>