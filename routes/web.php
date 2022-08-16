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

Route::get('/addCategory',function(){
    return view('addCategory');
});

//My part
Route::get('/event', function () {
    return view('viewEvent');
});

Route::get('/EMathEvent',function(){
    return view('EMathEvent');
});

Route::get('/EMathNameEnter', [App\Http\Controllers\EventController::class,'index'])->name('EMathEvent');

/*Route::get('/addCourse',function(){
    return view('addCourse',['categoryID'=>DB::table('categories')->get()]);
});*/

//Jian An part
Route::get('/addCategory',function(){
    return view('addCategory');
});

Route::get('/addCourse',function(){
    return view('addCourse',['categoryID'=>DB::table('categories')->get()],['teachers'=>DB::table('users')->where('role','=','teacher')->get()]);
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addCourse/store',[App\Http\Controllers\CourseController::class,'add'])->name('addCourse');

Route::get('/viewCourse',[App\Http\Controllers\CourseController::class,'view'])->name('viewCourse');



Route::get('showCourse',[App\Http\Controllers\CourseController::class,'show'])->name('showCourse');

Route::get('editCourse/{id}',[App\Http\Controllers\CourseController::class,'edit'])->name('editCourse');

Route::post('updateCourse',[App\Http\Controllers\CourseController::class,'update'])->name('updateCourse');

Route::get('viewTeacher',[App\Http\Controllers\TeacherController::class,'show'])->name('viewTeacher');

Route::get('profile/{id}',[App\Http\Controllers\UserController::class,'view'])->name('profile');

Route::get('editRole/{id}',[App\Http\Controllers\AdminController::class,'edit'])->name('editRole');

Route::post('updateRole',[App\Http\Controllers\AdminController::class,'update'])->name('updateRole');

Route::get('viewUser',[App\Http\Controllers\AdminController::class,'view'])->name('viewUser');



//My part.
Route::get('/addMaterial',function(){
    return view('addMaterial',['courseID'=>DB::table('courses')->get()]);
});

//course page

Route::get('/CourseDetails/{id}',[App\Http\Controllers\CourseController::class,'detail'])->name('CourseDetails');

Route::get('/EnrollClass/{id}',[App\Http\Controllers\CourseController::class,'enroll'])->name('enroll.class');

Route::get('editEnrollClass/{id}',[App\Http\Controllers\CourseController::class,'editDescription'])->name('edit.enrollClass');

Route::post('updateEnrollClass',[App\Http\Controllers\CourseController::class,'updateDescription'])->name('update.enrollClass');

//Material Page
Route::post('/addMaterial/store',[App\Http\Controllers\MaterialController::class,'addMaterial'])->name('addMaterial');

Route::get('showMaterial',[App\Http\Controllers\MaterialController::class,'showMaterial'])->name('showMaterial');

Route::get('viewMaterial',[App\Http\Controllers\MaterialController::class,'viewMaterial'])->name('viewMaterial');

//Event Page
Route::post('/EMathEvent/store',[App\Http\Controllers\EventController::class,'addName'])->name('EMathEvent');

Route::get('/EMathScore',[App\Http\Controllers\EventController::class,'showScore'])->name('EMathScore');

Route::post('/updateEMathGame',[App\Http\Controllers\EventController::class,'updateScore'])->name('updateEMathGame');

Route::get('/EMathGame',function(){
    return view('EMathGame');
});

//Route::get('/EMathGame/{id}',[App\Http\Controllers\EventController::class, 'editScore'])
//->name('EMathGame');

//Comment Page
Route::get('/addComment',function(){
    return view('addComment',['courseID'=>DB::table('courses')->get()], ['userID'=>DB::table('users')->get()]);
});

Route::post('/addComment/store',[App\Http\Controllers\CommentController::class,'addComment'])->name('addComment');

Route::get('viewComment',[App\Http\Controllers\CommentController::class,'viewComment'])
->name('viewComment');

//Hrdf Page
Route::get('/applyHRDF',function(){
    return view('applyHRDF', ['userID'=>DB::table('users')->get()]);
});

Route::post('/addComment/store',[App\Http\Controllers\CommentController::class,'addComment'])->name('addComment');

Route::get('viewComment',[App\Http\Controllers\CommentController::class,'viewComment'])
->name('viewComment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
