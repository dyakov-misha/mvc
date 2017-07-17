<?php
include $_SERVER['DOCUMENT_ROOT'].'/Autoload.php';

$config = require($_SERVER['DOCUMENT_ROOT'].'/config.php');

use controllers\PostController;
use base\App;

(new base\App())->run($config);
?>