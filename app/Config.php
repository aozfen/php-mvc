<?php
namespace App;

class Config {
    static $URL = 'http://localhost/php-mvc/';
    static $NOT_AUTH_REDIRECT = [
      'admin' => 'admin/giris',
      'uye' => 'uye/giris'
    ];
    static $DB_SERVER    = 'localhost';
    static $DB_NAME      = 'db_name';
    static $DB_USERNAME  = 'root';
    static $DB_PASSWORD  = 'root';

    static $LIBRARIES    = [
        'blade' => 'blade/BladeOne.php',
        'medoo' => 'medoo/class.medoo.php',
    ];
}
