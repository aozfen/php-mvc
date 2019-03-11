<?php
namespace App\Controller\Web;


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
    $this->view('web.uye.giris');
  }

}
