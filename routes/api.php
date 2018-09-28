<?php
use Illuminate\Support\Facades\Crypt;
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
        if(Hash::check('123456', '$2y$10$LXRp7bnaWTN8X5NrY0/iyO..jwEF1EG2Fu4KBNxoHojDSbbHnPFMS')){
            return 'It is ok';
        }
    });

    $api->post('register', 'AuthController@register');
    $api->post('login', 'AuthController@login');
    $api->post('logout', 'AuthController@logout');

    $api->get('currentUser', 'UserController@currentUser');
    $api->get('users', 'UserController@users');
    $api->post('changeBasic', 'UserController@changeBasic');
    $api->post('changePassword', 'UserController@changePassword');


    


    //$api->post('createCampaign', 'CampaignController@create');
    //$api->post('getCampaign', 'CampaignController@getRecords');

    $api->get('setting', 'CampaignController@getRecords');
    $api->post('setting', 'CampaignController@doAction');
});
