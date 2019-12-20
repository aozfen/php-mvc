<?php
namespace App;

class Response
{
  private static $defaultContentType = 'application/json';

  /**
  * Call Static: Bu sınıf için çağrılan static fonksiyonlar buraya düşer
  * @access public
  * @param string $nameOfFunction
  * @param array $arguments
  * @return func
  */
  public static function __callStatic($nameOfFunction, $arguments)
  {
    // Response::send() çağrılmış ise bu kod bloğu çalışır
    if($nameOfFunction == 'send') {
      switch (count($arguments)) {
        case 1:
          echo self::json($arguments[0]);
        break;
        case 2:
          echo self::jsonAndStatuCode($arguments[0], $arguments[1]);
        break;

      }
    }
  }

  /**
  * Json: Veriyi ekrana Json formatın da yazdırmak için kullanılır
  * @access private
  * @param string $value
  * @return object|array
  */
  static function json($value)
  {
    header('Content-type: '. self::$defaultContentType);
    return json_encode($value);
  }

  /**
  * Json And Statu Code: Veriyi ekrana yazdırmak ile birlikte HTTP Codu da ekler
  * @access private
  * @param string $value
  * @return func json
  */
  static function jsonAndStatuCode($value, $statuCode)
  {
    header('X-PHP-Response-Code: '.$statuCode, true, $statuCode);
    return self::json($value);
  }

}
