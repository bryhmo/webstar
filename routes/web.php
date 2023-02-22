<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;

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


Route::get("/logintins/{name}", function ($name) {
    return view("loginin",['name'=>$name]);
});



Route::get("comco",[userscontroller::class,"logfunc"]);


// Route :: view("loginpage","login");