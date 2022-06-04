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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index',function(){
    return view('index');
});

Route::get('/addCategory',function(){
    return view('addCategory');
});

Route::get('/addCourse',function(){
    return view('addCourse',['categoryID'=>DB::table('categories')->get()]);
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addCourse/store',[App\Http\Controllers\CourseController::class,'add'])->name('addCourse');

Route::get('viewCourse',[App\Http\Controllers\CourseController::class,'view'])->name('viewCourse');

Route::get('showCourse',[App\Http\Controllers\CourseController::class,'show'])->name('showCourse');

Route::get('editCourse/{id}',[App\Http\Controllers\CourseController::class,'edit'])->name('editCourse');

Route::post('updateCourse',[App\Http\Controllers\CourseController::class,'update'])->name('updateCourse');

// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('/', 'HomeController@index')->name('user_dashboard');
});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('admin_dashboard');
});

// teacher protected routes
Route::group(['middleware' => ['auth', 'teacher'], 'prefix' => 'teacher'], function () {
    Route::get('/', 'HomeController@index')->name('teacher_dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
