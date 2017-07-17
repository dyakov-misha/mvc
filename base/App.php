<?php
namespace base;

class App
{
function run($config)
{
$this->parseRequest($config);
}

function parseRequest($config)
{
$params=$_GET;
$controller='post';
$action='list';
if(!empty($params['c'])){
$controller=$params['c'];
unset($params['c']);
}

if (!empty($params['a'])) {
$action=$params['a'];
unset($params['a']);
}

$controller='\controllers\\'.ucfirst($controller).'Controller';
$action='action'.ucfirst($action);
$controllerInstance = new $controller($config);
call_user_func_array([$controllerInstance, $action],$params);
}
}

?>