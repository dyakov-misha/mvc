<?php

namespace controllers;

use models\Mysql;

class BaseController
{
	public $mysql;


	function __construct($config)
	{
		$this->mysql = new Mysql($config['host'],
				$config['login'],
				$config['password'],
				$config['database']);
	}
}

?>
