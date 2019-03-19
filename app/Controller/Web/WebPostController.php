<?php
namespace App\Controller\Web;

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
    $result = $userModel->login();
    Response::send($result);
  }


}