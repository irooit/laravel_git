<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/stackadmin/index.html');
    //return view('welcome');
});




/*Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/factory', 'FactoryController@index')->name('factory');
Route::get('/repo', 'RepoController@index');
Route::get('/test', 'TestController@index');


Route::any('/wechat/open','WechatPlatformController@notify')->name('wechat.openNotify'); //微信通知，主要是component_verify_ticket等信息
Route::any('/wechat/openindex/{appid}','WechatPlatformController@index')->name('wechat.openIndex'); //所有微信公众号消息入口，包括文本、图文、语音、地理位置等各种信息，这个具体实现就相当于做一个公众号平台了。
Route::any('/wxcallback','WechatPlatformController@wxcallback')->name('wechat.openCallback'); //授权回调方法，用于保存appid和refresh_token
Route::any('/wxauth','WechatPlatformController@auth')->name('wechat.openAuth'); //预授权页面
Route::any('/wxtest','WechatPlatformController@test')->name('wechat.openTest'); //测试页
Route::any('/open','WechatPlatformController@open')->name('wechat.open'); //测试页

