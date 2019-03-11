<?php
namespace App\Controller\Admin;

use App\Controller;

class AdminController extends Controller
{
    public $data;

    public function __construct() {
      $this->data['ayarlar'] = $this->ayarlar();
    }

    private function ayarlar()
    {
      //Burada ki veriler veritabanından alınacak
      return [
        'site_adi'=>'Php MVC Simple',
        'logo' => 'img/logo.png'
      ];
    }
    


}