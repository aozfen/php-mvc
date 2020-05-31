<?php

namespace App\Model;

use App\Database as DB;
use App\Model;
use App\Input;
use App\Redirect;
use App\Session;

class User extends Model
{
  private $table = "tbl_users";
  public $username = "";
  public $password = "";

  /* Example DB and Login */
  public function login()
  {
    if(empty($this->username)) return ["statu" => false, "msg" => "Kullanıcı adı boş kalamaz"];
    if(empty($this->password)) return ["statu" => false, "msg" => "Şifre boş kalamaz"];

    $user = DB::$run->get($this->table, "*", [
      "username" => $this->username,
      "password" => $this->password
    ]);

    if($user){
      Session::init();
      Session::put('uye', true);
      return ["statu" => true, "msg" => "Hoşgeldin, " . $user["name"], "location" => base_url('uye/profil')];
    }else{
      return ["statu" => false, "msg" => "Kullanıcı adı veya şifre yanlış"];
    }

  }
}
