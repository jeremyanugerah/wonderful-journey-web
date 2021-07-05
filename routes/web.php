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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@greeting')->middleware(['auth']);

Route::get('/article/filtered/{category_id}', 'ArticleController@indexFiltered');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::resource('users', 'UserController')->only([
    'edit', 'update'
])->middleware(['auth']);

Route::resource('users', 'UserController')->only([
    'index', 'show', 'destroy'
])->middleware(['auth', 'role:admin']);

Route::resource('articles', 'ArticleController')->middleware(['auth']);