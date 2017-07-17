<?php
include $_SERVER['DOCUMENT_ROOT'].'/Autoload.php';

use models\Mysql;


$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');

$mysql = new Mysql($config['host'],
				$config['login'],
				$config['password'],
				$config['database']);


$data = $mysql->select("SELECT * FROM article");
print_r($data);
?>