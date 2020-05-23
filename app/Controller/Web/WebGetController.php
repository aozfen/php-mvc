<?php
namespace App\Controller\Web;

use App\Session;
use App\Redirect;

class WebGetController extends WebController
{

  public function index()
  {
    $this->view('web.index');
  }

  public function profil()
  {
    $this->view('web.uye.profil');
  }

  public function giris()
  {
    Session::init();
    if(!Session::exists('uye'))
      $this->view('web.uye.giris');
    else
      Redirect::to("");
  }

}
