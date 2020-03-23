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
    return view('welcome');
});
    // admin section
Route::get('/admin',function(){
    return view('admin.dashboard');
});    
Route::get('/admin/pages',function(){
    return view('admin.page');
})->name('pages'); 
Route::get('/admin/pages/edit/{id}',function(){
    return view('admin.edit');
})->name('edit-page');
Route::get('/homes', function () {
    return view('admin.homes.homes');
});

Route::get('/edit_homes', function () {
    return view('admin.homes.edit_homes');
});

Route::get('/undercons', function () {
    return view('admin.undercons');
});

Route::get('/availsold', function () {
    return view('admin.availsold');
});
// end of admin section
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
