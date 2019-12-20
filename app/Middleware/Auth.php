<?php
namespace App\Middleware;

use App\Config;
use App\Redirect;
use App\Session;

class Auth
{
  public function uye()
  {
      if (!Session::exists("uye")) {
          Redirect::to(Config::$NOT_AUTH_REDIRECT["uye"]);
      }
  }

}
