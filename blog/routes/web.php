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




Route::middleware(['auth'])->group(function () {

	// Lessons...
	Route::get('/lessons/page/{pageNumber}', 'LessonController@index')->name('lessons_page');

	Route::post('/lessons/{lessonId}', [
		'uses'  =>  'LessonController@create'
	]);

	Route::get('/lessons/{lessonId}', [
		'uses'  =>  'LessonController@show',
		'as' => 'lesson.get'
	]);


	// TODO: change URL
	Route::get('/lessons/active', [
		'uses'  =>  'SitesController@activeLesson'
	]);

	Route::get('/lessons/add', [
		'uses'  =>  'SitesController@addLesson'
	]);

	Route::get('/lessons/yours/{authorId}', [
		'uses'  =>  'SitesController@getYourLessons',
		'as' => 'listOfLessons.get'
	]);




	// Messages Panel...
	Route::get('/messages', 'MessageController@index')->name('messages');

	Route::post('/messages', [
		'uses' => 'MessageController@create',
		'as' => 'message.create'
	]);


	// User Profile...
	Route::get('/user/{id}', [
		'uses' => 'UserController@show',
		'as' => 'user.profile'
	]);

	Route::put('/user/{id}/edit', [
		'uses' => 'UserController@edit',
		'as' => 'user.edit'
	]);


	// Admin Panel...
	Route::get('/admin', 'SitesController@index')->name('adminPanel');

});

