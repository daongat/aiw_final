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
Route::get('/articles/{id}/category', 'ArticleController@getThroughCategory')->name('articles.category');
Route::get('/articles/{slug}/detail', 'ArticleController@getDetail')->name('articles.detail');
Route::post('/articles/{id}/addFeedback', 'FeedbackController@addFeedback')->name('articles.addFeedback');
Route::delete('/articles/delete/{id}', 'FeedbackController@deleteFeedback')->name('articles.deleteFeedback');
Route::get('/articles/edit/{id}', 'FeedbackController@edit')->name('feedback.edit');
Route::post('/articles/update/{feedback_id}', 'FeedbackController@update')->name('feedback.update');
Route::get('/articles/tag/{id}', 'ArticleController@getTag')->name('articles.tag');