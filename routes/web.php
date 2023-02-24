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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/logintins/{name}", function ($name) {
    return view("loginin",['name'=>$name]);
});



Route::get("comco",[userscontroller::class,"logfunc"]);


Route :: view("loginpage","login");




// $data = str::of('They drink coffee')
//         ->between('They','coffee');
// echo $data;
//echo(str::of('usercontroller@show')->ParseCallback());


//echo(str::of('MyApplication')->pluralStudly());

//echo(str::random(16));

echo(str::of('what is this article about?')->title());

route::view('aboutpage','about');
route::view('contactpage','contact');

//This is passing of a data with routing
route::get('/{name}',function($name){
    echo $name ;
    return view('about');
});

