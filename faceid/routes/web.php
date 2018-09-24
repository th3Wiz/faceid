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

Route::get('/', function () {
	return Redirect::to('login');  	
})->name('/');

Route::get('login',function(){
	if (Session::has('user')){
   		if (Session::get('user')['isAdmin'] == 1) return redirect()->route('admin/home');
   		else return redirect()->route('home');
   	}
   	return view('pages-login',['error'=>Session::get('error')]);
});
Route::get('register',function(){
	return view('pages-register',['error'=>Session::get('error')]);
});
Route::get('logout','LoginController@getLogout')->name('logout');
Route::post('login','LoginController@getLogin')->name('login');
Route::post('register','LoginController@getRegister')->name('register');

Route::group(['prefix'=>'admin','middleware' => ['admin_middleware']],function(){
	Route::get('home',function(){
		return view('admin/home');
	})->name('admin/home');
	Route::get('person','AdminController@getPerson')->name('admin/person');
	Route::get('person/{id}','AdminController@getPersonDetail');
	Route::get('deletePerson/{id}','AdminController@deletePerson');
});
