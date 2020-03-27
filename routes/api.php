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
Route::resources([
    'page'              => 'Admin\PageController',
    'admin/home'        => 'Admin\HomeController',
    'admin/community'        => 'Admin\CommunityController',
   
]);
Route::post('admin/home/{id}','admin\HomeController@update');
Route::post('admin/community/{id}','admin\CommunityController@update');
Route::get( 'admin/home/feature/{id}', 'admin\HomeFeatureController@show');