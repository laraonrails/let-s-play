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
use App\User;

Route::get("/", function() {
   return view("index", ["users" => User::all()]);
});

Auth::routes(["verify" => true]);

Route::get('/home', 'HomeController@my_page');

Route::post("/home", "HomeController@tag_store");
Route::delete("/home/{tag}", "HomeController@tag_destroy");
Route::get("/search", "SearchController@search");
Route::put("/home/bio/{user}", "HomeController@bio_store");
Route::put("/home/contact/{user}", "HomeController@contact_store");
Route::get("/home/user/{user}", "SearchController@get_user");