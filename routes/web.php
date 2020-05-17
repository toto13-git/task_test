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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
  return view('welcome');
});

// Route::get('tests/test', 'TestController@index');

// Route::get('contact/index', 'ContactFormController@index');

Route::get('shops/index', 'ShopController@index');

Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function () {
  Route::get('index', 'ContactFormController@index')->name('contact.index');
  Route::get('create', 'ContactFormController@create')->name('contact.create');
  Route::post('store', 'ContactFormController@store')->name('contact.store');
  Route::get('show/{id}', 'ContactFormController@show')->name('contact.show');
  Route::get('edit/{id}', 'ContactFormController@edit')->name('contact.edit');
  Route::post('update/{id}', 'ContactFormController@update')->name('contact.update');
  Route::post('destroy/{id}', 'ContactFormController@destroy')->name('contact.destroy');
});






// Route::get('/input', function () {
//   return view('input');
// });

// Route::get('/archives', function () {
//   return view('archives.index');
// });

// Route::get('/archives/{category}/', function ($category) {
//   return view('archives.category', ['category' => $category]);
// });

// Route::get('/join/', function () {
//   return redirect()->to('/');
// });

// // Route::get('/{id}/', function ($id) {
// //     return $id . 'のページ';
// // });

// Route::get('/sum/{x}/{y}/', 'MathController@sum');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
