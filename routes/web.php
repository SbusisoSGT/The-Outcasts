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

Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/about', function(){
    return view('pages.about');
})->name('about');

Route::get('/contact', function(){
    return view('pages.contact');
})->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Blog Routes
Route::get('/blog/articles', 'ArticlesController@index')
        ->name('articles');

// Route::get('/blog/articles/{article}', 'ArticlesController@show')
//          ->name('articles.show');

Route::get('/blog/articles/create', 'ArticlesController@create')
        ->name('articles.create')
        ->middleware('can:create-article');

Route::post('/blog/articles/store', 'ArticlesController@store')
        ->name('articles.store')
        ->middleware('can:create-article');

Route::get('/blog/articles/edit/{article}', 'ArticlesController@edit')
        ->name('articles.edit')
        ->middleware('can:update-article', 'article');

Route::put('/blog/articles/{article}', 'ArticlesController@update')
        ->name('articles.update')
        ->middleware('can:update-article', 'article');

Route::delete('/blog/articles/{article}', 'ArticlesController@delete')
        ->name('articles.delete')
        ->middleware('can:update-article');


Route::get('/blog/tags/{tag}', 'TagController@show');

Route::post('/mailing-list', 'MailingListController@store')
        ->name('mailing-list.store');

//