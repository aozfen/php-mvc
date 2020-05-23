<?php
namespace App\Controller\Web;

use App\Input;
use App\Response;
use App\Model\User;

class WebPostController extends WebController
{

  public function join()
  {
    #code...
  }

  public function login()
  {
    $userModel = new User;
    $userModel->username = Input::post("username");
    $userModel->password = Input::post("password");
    Response::send($userModel->login());
  }


}
