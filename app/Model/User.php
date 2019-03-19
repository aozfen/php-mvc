<?php

namespace App\Model;

use App\Session;
use App\Input;
use App\Redirect;

class User 
{
  public function login()
  {
    //TODO: Veritabanı sorgusu eklenecek 
    $username = Input::post('username');
    $password = Input::post('password');

    if($username == "a" && $password == "a"){
      Session::init();
      Session::put('uye', true);
      return ["statu" => true, "location" => base_url('uye/profil')];
    }else{
      return ["statu" => false, "msg" => "Kullanıcı adı veya şifre yanlış"];
    }
    
  }
}
