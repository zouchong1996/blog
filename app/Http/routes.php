<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function (){
    return "get请求";
});

//Route::any('student/test1','StudentController@test1');
//Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');
Route::resource('articles','ArticlesController');



