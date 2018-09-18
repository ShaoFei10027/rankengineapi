<?php

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
//Authorization: bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xL3JhbmtlbmdpbmVhcGkvcHVibGljL2FwaS9sb2dpbiIsImlhdCI6MTUzNzE0ODk4MywiZXhwIjoxNTM3MTUyNTgzLCJuYmYiOjE1MzcxNDg5ODMsImp0aSI6IkFlRms5c0ZBN1BqRkhwQXIiLCJzdWIiOjExLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.aYEj83kvjILeF_0h5y1DL7E4oOkUFslxp9esMM7KAps
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {

    $api->get('test', function () {
        return 'It is ok';
    });

    $api->get('currentUser', 'UserController@currentUser');
    $api->get('users', 'UserController@users');
    $api->post('register', 'AuthController@register');
    $api->post('login', 'AuthController@login');
    $api->post('logout', 'AuthController@logout');

    $api->get('newAcclist', 'newAccount@list');

});
