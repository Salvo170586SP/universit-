<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('home');
});


//STUDENTI
Route::resource('students', StudentController::class);
/* 
  GET|HEAD        students ....................................... students.index › StudentController@index  
  POST            students ....................................... students.store › StudentController@store  
  GET|HEAD        students/create ................................ students.create › StudentController@create  
  GET|HEAD        students/{student} ............................. students.show › StudentController@show  
  PUT|PATCH       students/{student} ............................. students.update › StudentController@update  
  DELETE          students/{student} ............................. students.destroy › StudentController@destroy  
  GET|HEAD        students/{student}/edit ........................ students.edit › StudentController@edit 
*/