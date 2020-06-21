<?php

use App\Http\Controllers\ResController;
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

Route::get('/', 'PagesController@index'); 

Route::get('/about', 'PagesController@about'); 

Route::get('/get/{id}', 'PagesController@get'); 

Route::get('/login', 'LoginController@showForm'); 

Route::get('/ok', 'LoginController@islogged'); 

Route::post('/login', 'LoginController@login');

Route::get('/getS','SessionController@getSession');

Route::get('/setS','SessionController@setSession');

Route::get('/delS','SessionController@deleteSession');

Route::get('/alert','SessionController@flashSession');

Route::get('/setC','cookieController@setCookie');

Route::get('/getC','cookieController@getCookie');

Route::get('/register', 'registerController@showForm'); 

Route::post('/register', 'registerController@register');

Route::resource('/comments','CommentController');


/*
Route::get('/laravel', function () {
    return 'laravel';
});
Route::get('/{id}/{user?}', function ($id,$user='null') {
    return 'hello '.$id.' user : '.$user;
});*/


// Route::get('/','TestController@index');



Route::resource('posts','ResController') ;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
