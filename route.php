<?php

/**
* 
* 
*/

Route::run('/', 'Web/WebGetController@index');

//Bir diğer kullanımı
/*Route::run('/', function () {
    echo 'merhaba dünya!';
});*/

Route::run('/admin', 'Admin/AdminGetController@index');

//Parametreler ile çalışma
//Route::run('/admin/{url}', 'Admin/AdminGetController@index');
//Route::run('/admin/{id}', 'Admin/AdminGetController@index');
