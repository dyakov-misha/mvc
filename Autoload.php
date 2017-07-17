<?php
namespace app;

class Autoload
{

    public static function autoload($className)
    {

        if (strpos($className, '\\') !== false) {
            $classFile = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.str_replace('\\', '/', $className) . '.php';
        }

        if(empty($classFile)) {
            return;
        }

        if (!is_file($classFile)) {
            return;
        }



        include($classFile);

        if (!class_exists($className, false) && !interface_exists($className, false) && !trait_exists($className, false)) {
            throw new Exception("Unable to find '$className' in file: $classFile. Namespace missing?");
        }
    }
}

spl_autoload_register(['app\Autoload','autoload'], true, true);
