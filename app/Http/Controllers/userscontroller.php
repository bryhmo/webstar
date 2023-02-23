<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Str;

class userscontroller extends Controller
{
    //
    function logfunc()
    {
        return view("login");
    }

    function fluentstring(){
        //Example 1
        $data = "hi lets learn laravel";
        $data = str::of($data)
                ->ucfirst($data)
                ->replaceFirst("Hi","Hello",$data)
                ->camel($data);
        echo $data;


        //example2 manipulate the string "hello" 
        str::of("hello")
            ->ucfirst("hello")
            ->append('my friend');


        //example 3
        //replace the occurence of a particular string 
        str::of('this is what separates good tea fro other tea.')
            ->replace('tea','coffee');
        //output = this is what separate good coffe from other coffee

        //example4
        //checks if a string start with another string 
        str::of('where does it begin?')
            ->startswith('whiskey');
        //output = false


        //example 5
        //extract file name and extension
        $file = 'my_new.image-file.png';
        $file = str::of($file)
                ->beforeLast('.');

        // output = my_new.image-file

        $extension = str::of($file)
                    ->afterLast('.');
        //output = png

        //example 6
        //abbreviate a name 
        str::of('john')
            ->limit(1,'.');
        //output = J.

        //example 7 
        //change the extension of a file 
        str::of('my_new.image-file.png')
            ->beforeLast('.')
            ->append('.jpg');
        //output = my_new.image-file.jpg

        //example 8
        //chsnge a filename to Kebab case and add extension
        str::of('NewFile')
            ->prepend('app')
            ->Kebab()
            ->finish('.css');
        //output = app-new-file.css


        //Example 9 
        // get the value between two other strings 
        str::of('They drink coffee')
            ->between('They','coffee');
        //output = drink

        //Example 10
        //convert class@method to class and method 
        str::of('usercontroller@show')->parsecallback();
        //output = ['usercontroller','show']

        //Example 11
        //pluralize a studly case string 
        str::of('MyApplication')->pluralStudly();
        //output = MyApplications

        //Example 12
        //Generate a random string 
        str::random(16);
        //output = random number of 16 characters
    }
}
