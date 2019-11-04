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

//Posts
Route::get('/', 'ArticleController@index')->name('article.index');
Route::get('/{slug}/category', 'ArticleController@getThroughCategory')->name('article.category');

