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
Route::get('/admin/students', 'Admin\StudentsController@index')->name('students')->middleware('role:admin');
Route::get('/admin/student/add', 'Admin\StudentsController@showAdd')->middleware('role:admin');
Route::post('/admin/student/add', 'Admin\StudentsController@addStudent')->name('addS');

Route::get('/admin/tutors', 'Admin\TutorsController@index')->name('tutors')->middleware('role:admin');
Route::get('/admin/tutors/add', 'Admin\TutorsController@showAdd')->middleware('role:admin');
Route::post('/admin/tutors/add', 'Admin\TutorsController@addTutor')->name('addT');

Route::get('/tutor/dashboard', 'Tutor\DashboardController@index')->middleware('role:tutor');
Route::get('/student/dashboard', 'Student\DashboardController@index')->middleware('role:student');

Route::get('/', 'HomeController@index')->name('home');