<?php

use App\Route;

Route::get('/', 'Web\WebGetController@index');

//Bir diğer kullanımı
/*Route::get('/', function () {
    echo 'merhaba dünya!';
});*/

//Post işlemini tanımlama
Route::post('/uye/giris', 'Web\WebPostController@login');

// Yetkilendirme kullanımı (Session)
// 2. parametre olan "Array" Middleware fonksiyonudur. "app/Middleware/... klasörü altında çalışmaktadır
Route::get('/uye/profil', ["Auth" => "uye"], 'Web\WebGetController@profil');
Route::get('/uye/giris', 'Web\WebGetController@giris');



Route::get('/admin', 'Admin\AdminGetController@index');

//Parametreler ile çalışma
//Route::get('/admin/{url}', 'Admin\AdminGetController@index');
//Route::get('/admin/{id}', 'Admin\AdminGetController@index');
