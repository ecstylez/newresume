<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/past-work/{dir}', 'PageController@loadImages');

Route::get('/{slug}', array(
	'uses' => 'PageController@getPage'
))->where('slug', '([A-Za-z0-9\-\/]+)');

Route::post('submit-form', 'FormController@sendEmail');

// Route::group(['middlewre' => ['web']], function () {
// 	Route::post('submit-form', array(
// 		'as'   => 'submit-form',
// 		'uses' => 'FormController@sendEmail',
// 	));
// });