<?php
namespace App;

use Medoo\Medoo;
use App\Config;

class Database
{

    static $run;

    public function __construct()
    {
      $controller = new Controller;
      if (!class_exists('Medoo\Raw'))  //Daha önce class dahil edildiği için bir daha dahil edilince hata veriyordu bu şekilde çözüldü
       $controller->lib('medoo');

      self::$run = new Medoo([
        'database_type' => 'mysql',
        'database_name' => Config::$DB_NAME,
        'server'        => Config::$DB_SERVER,
        'username'      => Config::$DB_USERNAME,
        'password'      => Config::$DB_PASSWORD,
        'charset'       => 'utf8',
        'port'          => 3306
      ]);

    }

}
