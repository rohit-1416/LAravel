<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/hello', function () {
    return "hello world";
});



// created folder pages nd inside that saved about.blade php
// 



Route::get('/users/{id}', function ($id) {
    //                      return dynamic id
    return 'This is users :'.$id;
});
// dynamic Route creation

// return id fro  url


Route::get('/users/{id}/{name}', function ($id,$name) {
    //                      return dynami id and name 
    return 'This is users :'.$name.' This is user id :'.$id;
});
// passing more than 1 dynamic value
*/


// Larval 7 version -> Route::get('/','PagesController@index');
// PagesController @function name


use App\Http\Controllers\PagesController;
Route::get('/',[PagesController::class, 'index']);
// above new syntax 

Route::get('/abt',[PagesController::class, 'about']);

Route::get('/services',[PagesController::class, 'services']);

    // can also use pages/abt diretory
 
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::resource('posts', 'App\Http\Controllers\PostsController');
Auth::routes();

