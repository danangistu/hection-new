<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	return view('welcome');
// });
Route::resource('/','Frontend\HomeController');
Route::get('contest/{id}','Frontend\ContestController@viewContest');
Route::get('winner/{id}','Frontend\WinnerController@viewWinner');
Route::get('register','Frontend\RegisterController@index');
Route::get('register/{category}','Frontend\RegisterController@getForm');
Route::post('register/{category}','Frontend\RegisterController@postForm');
Route::resource('newsletter','Frontend\NewsLetterController');
Route::get('success','Frontend\SuccessController@index');
Route::get('uploaded','Frontend\SuccessController@uploaded');
Route::get('fail','Frontend\FailController@index');
Route::get('verification/{code}','Frontend\VerificationController@index');
Route::post('verification/{code}','Frontend\VerificationController@submit');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::controller('login','Backend\LoginController');

	Route::get('admin-cp' , function(){
		return redirect('login');
	});

	if(request()->segment(1) == webarq()->backendUrl)
	{
		include __DIR__.'/backendRoutes.php';
	}

});
