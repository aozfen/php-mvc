<?php
namespace App;

class Controller
{
    static $lib;

    public static function view($name, $data = [], $oldData = [])
    {
        self::lib('blade');
        $blade = new \eftec\bladeone\BladeOne(null,null,\eftec\bladeone\BladeOne::MODE_DEBUG);
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
        $filePath = realpath('.') . '/libraries/' . Config::$LIBRARIES[$name];
        require $filePath;
    }

}