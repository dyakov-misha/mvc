<?php

namespace controllers;

use models\Mysql;

class BaseController
{
	protected $mysql;


	public function __construct($config)
	{
		$this->mysql = new Mysql($config['host'],
				$config['login'],
				$config['password'],
				$config['database']);
	}

	public function render ($viewFile, $params)
	{
		$viewFile = $_SERVER['DOCUMENT_ROOT'].'/views/'.$viewFile.'.php';
		ob_start();
		extract($params, EXTR_OVERWRITE);
		require($viewFile);
		return ob_get_clean();
	}
}



?>
