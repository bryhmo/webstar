<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;
use Illuminate\Support\str;

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
$data = "hello";
$data = str::of("hello")
    ->ucfirst("hello")
    ->append(' my friend');
echo $data;
        

Route::get('/', function () {
    return view('welcome');
});


Route::get("/logintins/{name}", function ($name) {
    return view("loginin",['name'=>$name]);
});



Route::get("comco",[userscontroller::class,"logfunc"]);


// Route :: view("loginpage","login");