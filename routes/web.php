<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/admin/dashboard', 'Admin\DashboardController@index')->middleware('role:admin');
Route::get('/admin/materials', 'Admin\MaterialsController@index')->middleware('role:admin');
Route::get('/admin/students', 'Admin\StudentsController@index')->middleware('role:admin');
Route::get('/admin/student/add', 'Admin\StudentsController@showAdd')->middleware('role:admin');


Route::get('/tutor/dashboard', 'Tutor\DashboardController@index')->middleware('role:tutor');
Route::get('/student/dashboard', 'Student\DashboardController@index')->middleware('role:student');

Route::get('/', 'HomeController@index')->name('home');