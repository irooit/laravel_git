<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->group(['prefix' => 'git', 'namespace' => 'App\Http\Controllers\Api\Git'], function ($api) {
        $api->match(['post', 'get'], 'webhook', 'DeployController');
    });

    $api->group(['prefix' => 'test', 'namespace' => 'App\Http\Controllers\Api\Test'], function ($api) {
        $api->match(['post', 'get'], 'index', 'TestController@index');
    });
});
