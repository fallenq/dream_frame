<?php

class App
{
    public static function autoload($className)
    {
        $classFile = dirname(__DIR__)."/$className.php";
        include($classFile);
    }
}
spl_autoload_register(['App', 'autoload'], true, true);