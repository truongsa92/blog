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
    return view('welcome');
});

Route::get('khoahoc', function () {
	return "Xin chao cac ban";
});

//Truyen tham so
Route::get('hoten/{ten}', function ($ten) {
	echo $ten;
})->where([ 'ten' => '[a-zA-Z]+' ]);

//Dinh danh
Route::get('route1', ['as' => 'MyRoute', function () {
	echo "Xin chao";
}]);

Route::get('goiten', function () {
	return redirect()->route('MyRoute');
});

Route::get('route2', function (){
	echo "Day la route2";
})->name('MyRoute2');

//Group
Route::group([ 'prefix' => 'MyGroup' ] , function() {
	Route::get('User1', function() { 
		return 'User1'; 
	});
	Route::get('User2', function() { 
		return 'User2'; 
	});
	Route::get('User3', function() { 
		return 'User3'; 
	});
}); 

//Bai goi controller
Route::get('GoiController', 'MyController@XinChao');

Route::get('ThamSo/{ten}/{ten2}', 'MyController@KhoaHoc');

//URL
Route::get('MyRequest', 'MyController@GetURL');

//Gui nhan du lieu voi Request
Route::get('GetForm', function() {
	return view('postForm');
});
Route::post('PostForm', 'MyController@PostForm')->name('PostForm');

//Cookie
Route::get('setCookie', 'MyController@setCookie');
Route::get('getCookie', 'MyController@getCookie');

//File
Route::get('getFile', function() {
	return view('postFile');
});
Route::post('postFile', 'MyController@postFile')->name('postFile');

//Json
Route::get('json', 'MyController@getJson');

//View
Route::get('myView', 'MyController@myView');

Route::get('time/{t}', 'MyController@time');

View::share('KhoaHoc', 'Laravel');

//blade template
Route::get('blade', function() {
	return view('pages.laravel');
});

Route::get('blade2', function() {
	return view('pages.php');
});

Route::get('BladeTemplate/{a}', 'MyController@blade');

//Database
Route::get('database', function(){
	Schema::create('loaisanpham', function($table){
		$table->increments('id');
		$table->string('ten', 200);
	});
	echo "Da thuc hien lenh tao bang";
});
Route::get('lienketbang', function() {
	Schema::create('sanpham', function($table) {
		$table->increments('id');
		$table->string('ten');
		$table->float('gia');
		$table->integer('soluong')->default(0);
		$table->integer('id_loaisanpham')->unsigned();
		$table->foreign('id_loaisanpham')->references('id')->on('loaisanpham');
	});
	echo "Da tao bang sang pham";
});










































