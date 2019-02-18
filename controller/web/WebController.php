<?php
/**
* Route kısmında direk buradan da karşılık fonksiyon yazılabilir ancak kod okunurluğu için gelen istekleri
* WebGetController ve WebPostController olarak ikiye böldüm. Bu şekilde her iki sınıfa da ortak değişken taşınabilir.
*/

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