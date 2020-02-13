<?php

use App\Utils\UrlUtil;

Route::get(UrlUtil::home(), 'Pages\\NonAuths\\HomeController@index');
Route::get(UrlUtil::about(), 'Pages\\NonAuths\\AboutController@index');
Route::get(UrlUtil::news(), 'Pages\\NonAuths\\HomeController@index');
Route::get(UrlUtil::services(), 'Pages\\NonAuths\\HomeController@index');
Route::get(UrlUtil::contactUs(), 'Pages\\NonAuths\\ContactUsController@index');


Route::get(UrlUtil::error404(), 'Pages\\NonAuths\\ErrorController@error404');

Auth::routes();
Route::get('/home', 'Pages\\Auths\\HomeController@index');