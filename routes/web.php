<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/classroom','App\Http\Controllers\ClassroomController@index');
Route::get('/classroom/add','App\Http\Controllers\ClassroomController@addPage');
Route::post('/classroom/post','App\Http\Controllers\ClassroomController@store');
Route::get('/classroom/detail/{id}','App\Http\Controllers\ClassroomController@detailPage');
Route::get('/classroom/edit/{id}','App\Http\Controllers\ClassroomController@editPage');
Route::patch('/classroom/update/{id}','App\Http\Controllers\ClassroomController@update');
Route::delete('/classroom/delete/{id}','App\Http\Controllers\ClassroomController@destroy');

// student
Route::get('/students','App\Http\Controllers\StudentController@index');
Route::get('/student/add','App\Http\Controllers\StudentController@addPage');
Route::post('/student/post','App\Http\Controllers\StudentController@store');
Route::get('/student/edit/{id}','App\Http\Controllers\StudentController@editPage');
Route::patch('/student/update/{id}',
'App\Http\Controllers\StudentController@update');
Route::delete('/student/delete/{id}','App\Http\Controllers\StudentController@destroy');
Route::get('/student/detail/{id}','App\Http\Controllers\StudentController@detail');


