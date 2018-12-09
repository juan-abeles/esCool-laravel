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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ViewController@index')->name('index');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

// Teacher
Route::post('/grades', 'GradeController@store')->name('grade_store');

// Admin
Route::post('/courses', 'GroupController@store')->name('group_store');

Route::post('/attendance', 'AttendanceController@store')->name('attendance_store');