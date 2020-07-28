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



// public routes
Auth::routes();
Route::get('/', 'LandingController@index')->name('landing');
Route::get('/about', 'LandingController@about')->name('about');
Route::get('/blog', 'LandingController@blog')->name('blog');
Route::get('/blog/{slug}', 'LandingController@blog')->name('blog-item');
Route::get('/contact', 'LandingController@contact')->name('contact');


// authenticated routes
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function (){
    Route::get('/tag', 'TagController@index')->name('tag');
    Route::get('/tag/create', 'TagController@create')->name('tag-create');
    Route::post('/tag/create', 'TagController@store')->name('tag-create');
    Route::get('/tag/{id}/show', 'TagController@show')->name('tag-show');
    Route::get('/tag/{id}/edit', 'TagController@edit')->name('tag-edit');
    Route::post('/tag/{id}/edit', 'TagController@update')->name('tag-edit');
    Route::get('/tag/{id}/delete', 'TagController@destroy')->name('tag-delete');

    Route::get('/category', 'CategoryController@index')->name('category');
    Route::get('/category/create', 'CategoryController@create')->name('category-create');
    Route::post('/category/create', 'CategoryController@store')->name('category-create');
    Route::get('/category/{id}/show', 'CategoryController@show')->name('category-show');
    Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category-edit');
    Route::post('/category/{id}/edit', 'CategoryController@update')->name('category-edit');
    Route::get('/category/{id}/delete', 'CategoryController@destroy')->name('category-delete');

    Route::get('/article', 'ArticleController@index')->name('article');
    Route::get('/article/create', 'ArticleController@create')->name('article-create');
    Route::post('/article/create', 'ArticleController@store')->name('article-create');
    Route::get('/article/{id}/show', 'ArticleController@show')->name('article-show');
    Route::get('/article/{id}/edit', 'ArticleController@edit')->name('article-edit');
    Route::post('/article/{id}/edit', 'ArticleController@update')->name('article-edit');
    Route::get('/article/{id}/delete', 'ArticleController@destroy')->name('article-delete');
});
