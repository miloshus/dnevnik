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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::middleware(['home'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
});



Route::get('/admin/home', function(){

    return view('home');

})->name('admin.home');


Route::get('/teacher/home', 'HomeController@teacher')->name('teacher.home');

Route::get('/professor/home', 'HomeController@professor')->name('professor.home');

Route::get('/parent/home', 'HomeController@parent')->name('parent.home');

Route::get('/principal/home', 'HomeController@principal')->name('principal.home');

Route::resource('/admin/users', 'AdminUsersController');

Route::resource('/admin/section', 'SectionController');

Route::resource('/admin/students', 'StudentsController');


Route::get('/teacher/student/{student}', 'TeacherController@student')->name('teacher.student')->middleware('student');

Route::get('/teacher/section/{id}', 'TeacherController@section')->name('teacher.section');




