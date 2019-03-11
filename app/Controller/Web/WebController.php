<?php
namespace App\Controller\Web;

use App\Controller;

class WebController extends Controller
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