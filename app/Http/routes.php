<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','Home\IndexController@Index');                    //调用home下的Index控制器        前台主页
Route::get('/Admin','Admin\IndexController@Index');              //调用admin下的Index控制器       后台主页
