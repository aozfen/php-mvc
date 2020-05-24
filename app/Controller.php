<?php
namespace App;

use App\Config;
use eftec\bladeone\BladeOne;

class Controller
{
    static $lib;

    public static function view($name, $data = [], $oldData = [])
    {
        self::lib('blade');
        $cache = realpath('.') . '/cache';
        $blade = new \eftec\bladeone\BladeOne(null,$cache,\eftec\bladeone\BladeOne::MODE_AUTO);
        $blade->setBaseUrl(Config::$URL);
        if(count($oldData) > 0)
            $data = array_merge($data, (array)$oldData);

        extract($data);
        echo $blade->run($name, $data);
    }

    public function model($name)
    {
        require realpath('.') . '/model/' . strtolower($name) . '.php';
        return new $name();
    }

    public static function lib($name)
    {
      $files = Config::$LIBRARIES[$name];
      if(is_array($files)){
        for ($i=0; $i < count($files); $i++) {
          $filePath = realpath('.') . '/libraries/' . $name . '/' . $files[$i];
          require $filePath;
        }
      }else{
        $filePath = realpath('.') . '/libraries/' . $files;
        require $filePath;
      }
    }

}
