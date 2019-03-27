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

Route::get('/', [
	'uses' => 'SitesController@index',
]);


Route::get('/courses/lis', array(
	'uses'  =>  'SitesController@loadContent'
));

Route::get('/courses/active', array(
	'uses'  =>  'SitesController@loadActiveCourse'
));

Route::get('/courses/list', [
	'uses' => 'SitesController@getCourses',
	'as' => 'course.get'
]);


Route::middleware(['auth'])->group(function () {



	Route::get('/messages', [
		'uses' => 'MessageController@messages',
		'as' => 'message.messageList'
	]);

	Route::post('/messages/post', [
		'uses' => 'MessagesController@postMessage',
		'as' => 'message.postMessage'
	]);

	Route::get('/user/{profile}', [
		'uses' => 'UserController@profile',
		'as' => 'user.profile'
	]);

	Route::put('/user/{profile}/edit', [
		'uses' => 'UserController@edit',
		'as' => 'user.edit'
	]);

});

