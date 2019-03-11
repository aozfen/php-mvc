<?php
namespace App;

class Language
{
  static $defaultLang = "tr";
  static $currentlang = '';
  private $langPath;
  private $lang;

  public function __construct() {
    $this->init();
    $this->lang = LANGS;
  }

  public function getLang($key)
  {
    $words = unserialize($this->lang);
    if(isset($words[$key])) return $words[$key];
    else return 'NaN';
  }

  private function init()
  {
    $this->changeCurrentLang();
    $this->langPath();
    $this->addedDefine();
  }

  private static function changeCurrentLang(){
    if(isset($_COOKIE['lang'])) return self::$currentlang = $_COOKIE['lang'];
    else return self::$currentlang = self::$defaultLang;
  }

  private function langPath(){
    $this->langPath = realpath('.').DIRECTORY_SEPARATOR.'lang'.DIRECTORY_SEPARATOR.self::$currentlang.DIRECTORY_SEPARATOR.'lang.php';
  }

  private function addedDefine(){
    define('LANGS', serialize(require_once($this->langPath)));
  }

  public static function getContentLang($db, $col, $id, $key)
  {
    self::$currentlang = self::changeCurrentLang();
    $dilKey = self::$currentlang;
    return $db->query("SELECT deger FROM tbl_dil WHERE $col = '$id' AND dil_key = '$dilKey' AND deger_key = '$key' LIMIT 1 ")->fetchAll()[0]['deger'];
  }
}
