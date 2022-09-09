<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

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
Route::get('students/get-course/{id}', [StudentController::class, 'getCourse'])->name('students.getCourse');
/* 
  GET|HEAD        students ....................................... students.index › StudentController@index  
  POST            students ....................................... students.store › StudentController@store  
  GET|HEAD        students/create ................................ students.create › StudentController@create  
  GET|HEAD        students/{student} ............................. students.show › StudentController@show  
  PUT|PATCH       students/{student} ............................. students.update › StudentController@update  
  DELETE          students/{student} ............................. students.destroy › StudentController@destroy  
  GET|HEAD        students/{student}/edit ........................ students.edit › StudentController@edit 
*/


//CORSI
Route::resource('courses', CourseController::class);
/* 
  GET|HEAD        courses ........................................ courses.index › CourseController@index
  POST            courses ........................................ courses.store › CourseController@store
  GET|HEAD        courses/create ................................. courses.create › CourseController@create
  GET|HEAD        courses/{course} ............................... courses.show › CourseController@show
  PUT|PATCH       courses/{course} ............................... courses.update › CourseController@update
  DELETE          courses/{course} ............................... courses.destroy › CourseController@destroy
  GET|HEAD        courses/{course}/edit .......................... courses.edit › CourseController@edit
*/


//PROFESSORI
Route::resource('teachers', TeacherController::class);
/* 
  GET|HEAD        teachers ........................................ teachers.index › TeacherController@index  
  POST            teachers ........................................ teachers.store › TeacherController@store  
  GET|HEAD        teachers/create ................................. teachers.create › TeacherController@create  
  GET|HEAD        teachers/{teacher} .............................. teachers.show › TeacherController@show  
  PUT|PATCH       teachers/{teacher} .............................. teachers.update › TeacherController@update  
  DELETE          teachers/{teacher} .............................. teachers.destroy › TeacherController@destroy  
  GET|HEAD        teachers/{teacher}/edit ......................... teachers.edit › TeacherController@edit  
*/