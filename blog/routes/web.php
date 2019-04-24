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


Auth::routes();

// Auth page
Route::get('/home', 'HomeController@index')->name('homee');

Route::get('/', 'AdvertisementController@index')->name('advertisements');

Route::get('/admin', [
	'uses' => 'SitesController@adminPanel',
	'as' => 'admin.panel'
]);


Route::middleware(['auth'])->group(function () {

	Route::get('/lessons', 'LessonController@index')->name('lessons');

	Route::post('/lessons/{lesson_id}', [
		'uses'  =>  'LessonController@create'
	]);

	Route::get('/lessons/{lesson_id}', [
		'uses'  =>  'LessonController@show',
		'as' => 'lesson.get'
	]);



	Route::get('/lessons/active', [
		'uses'  =>  'SitesController@activeLesson'
	]);

	Route::get('/lessons/add', [
		'uses'  =>  'SitesController@addLesson'
	]);





	Route::get('/lessons/yours/{author_id}', [
		'uses'  =>  'SitesController@getYourLessons',
		'as' => 'listOfLessons.get'
	]);



	Route::get('/messages', [
		'uses' => 'MessageController@messages',
		'as' => 'message.messageList'
	]);

	Route::post('/messages/post', [
		'uses' => 'MessageController@postMessage',
		'as' => 'message.postMessage'
	]);





	Route::get('/user/{profile}', [
		'uses' => 'UserController@show',
		'as' => 'user.profile'
	]);

	Route::put('/user/{profile}/edit', [
		'uses' => 'UserController@edit',
		'as' => 'user.edit'
	]);

});

