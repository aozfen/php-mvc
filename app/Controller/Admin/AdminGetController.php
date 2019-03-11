<?php
namespace App\Controller\Admin;


class AdminGetController extends AdminController
{

  public function index()
  {
    $this->view('admin.index');
  }


}