<?php

Route::get('/image/{image}/{width}/{height}', 'CropImageController@crop')->name('image');
Route::get('/', 'HomeController@index');

