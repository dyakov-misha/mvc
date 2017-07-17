<?php

class Mysql
{
	public $link;

	function __construct($host,$login,$passwd,$database)
	{
		$this->link = mysqli_connect($host,$login,$passwd,$database);
		if (!$this->link) {
	    	echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    	echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    	echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
		}
	}

	function select($query)
	{
		$res = mysqli_query($this->link,$query);
		$post = [];
		while($row = mysqli_fetch_assoc($res)){
			$post[] = $row;
		}
		return $post;
	}
}