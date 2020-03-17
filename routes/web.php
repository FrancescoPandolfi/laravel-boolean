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

// Route::get('/', function () {
//     return view('welcome');
// });

// Home
Route::get('/', 'HomeController@home')->name('homepage');
Route::get('/dopo-il-corso', 'HomeController@dopocorso')->name('dopo-il-corso');


// studenti
// Route::get('/students', 'StudentController@index')->name('student.index');
Route::get('/students/show-student/{id}', 'StudentController@show')->name('student.show');