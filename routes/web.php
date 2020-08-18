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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/navbar', function () {
    return view('layout.navbar');
});
Route::get('/admin_login', function () {
    return view('admin_login');
});


/*Route::get('/about', function () {
    return view('about',['page_name'=>'contact me page',
	'page_desc'=>'this is description']);
});*/

//didn't work
/*Route::view('about',"about",['page_name'=>'contact me page',
	'page_desc'=>'this is description']); */


/*Route::get('/about', function () {
	$name = request("name");
	$id   = request("id");
    return $name;
    return $id;
});
*/
  /*  Route::get('/about/{id}', function($id) {
    return view('/about',['the_id'=> $id]);
});*/

/*Route::get('/about/{id}', function ($id) {
	$cats = [
		'1'=>'games',
		'2'=>'programming',
		'3'=>'Books'
			] ;

    return view('about',[
    	'the_id'=>$cats[$id] ?? "this id is NOT found"
    ]);
});
*/
 