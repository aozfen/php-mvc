<?php


class WebGetController extends WebController
{

  public function index()
  {
    $this->view('web.index');
  }

  public function profil()
  {
    $this->view('web.profil');
  }


}
