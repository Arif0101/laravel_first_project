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

Route::get('/about', function () {
    return "Hi I am About";
});

Route::get('/contact', function () {
    return "Hi am i contact?";
});

Route::get('/page/{id}/{name}', function ($id, $name) {
    return "This is page number ". $id ." ". "and My Name is"  . " " . $name; 
});

Route::get('admin/posts/example', array('as'=>'admin.home', function(){

    $url = route('admin.home');

    return "this url is " . $url;
 
}));
