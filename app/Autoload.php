<?php

class Autoload
{

  public function __construct() {
    spl_autoload_register('Autoload::autoloadEngine');
    spl_autoload_register('Autoload::autoloadControllers');
    
  }

  public static function autoloadEngine($className)
  {
    $className  = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $classPath  = __DIR__.DIRECTORY_SEPARATOR.$className . ".php";
    if (is_readable($classPath)) {
        require $classPath;
    }
  }

  public static function autoloadControllers($className)
  {
    $className  = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    $path = realpath('.') . DIRECTORY_SEPARATOR . 'controller/';
    if(is_dir($path)){
      if($handle = opendir($path)){
        while (($file = readdir($handle)) !== false) {
          if(is_dir($path . $file) && $file != '.' && $file != '..') {
              $classPath  = realpath('.').DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.$file.DIRECTORY_SEPARATOR.$className . ".php";
              if (is_readable($classPath)) {
                require $classPath;
              }
          }
        }
        closedir($handle);
      }
    }

    
  }

}
