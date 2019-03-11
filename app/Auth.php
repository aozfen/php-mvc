<?php
namespace App;

class Auth
{
  public static function check($key)
  {
    Session::init();
    if (!Session::exists($key)) {
        Session::destroy();
        Redirect::to(Config::$NOT_AUTH_REDIRECT[$key]);
    }
  }

}
