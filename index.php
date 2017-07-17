<?php
include $_SERVER['DOCUMENT_ROOT'].'/Autoload.php';

$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');

use controllers\PostController;

$controller = new PostController($config);
$controller -> request();
?>