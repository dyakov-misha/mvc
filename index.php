<?php
$config = require($_SERVER['DOCUMENT_ROOT'].'/html/config.php');
function connect($host,$login,$passwd,$database)
{
	$link = mysqli_connect($host,$login,$passwd,$database);
	if (!$link) {
    	echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    	echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    	echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	return $link;
}

function select($link,$query)
{
	$res = mysqli_query($link,$query);
	$post = [];
	while($row = mysqli_fetch_assoc($res)){
		$post[] = $row;
	}
	return $post;
}

$link = connect($config['host'],
				$config['login'],
				$config['password'],
				$config['database']);


$data = select($link,"SELECT * FROM article");
print_r($data);

?>