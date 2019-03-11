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
// 3. parametre olan "uye" Session::put("uye", true) ile login işlemi anında tanımlanır
Route::get('/uye/profil', 'Web\WebGetController@profil', "uye");
Route::get('/uye/giris', 'Web\WebGetController@giris');



Route::get('/admin', 'Admin\AdminGetController@index');

//Parametreler ile çalışma
//Route::get('/admin/{url}', 'Admin\AdminGetController@index');
//Route::get('/admin/{id}', 'Admin\AdminGetController@index');
