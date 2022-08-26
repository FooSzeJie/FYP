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

//-------------------------------------------Category Page-----------------------------------------------------------//
Route::get('/addCategory',function(){
    return view('addCategory');
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'show'])->name('showCategory');

Route::get('editCategory/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('editCategory');

Route::post('/updateCategory',[App\Http\Controllers\CategoryController::class,'update'])->name('updateCategory');

Route::get('/deleteCategory/{id}', [App\Http\Controllers\CategoryController::class,'delete'])->name('deleteCategory');


//-------------------------------------------Course Page-----------------------------------------------------------//
Route::get('/addCourse',function(){
    return view('addCourse',['categoryID'=>DB::table('categories')->get()],['teachers'=>DB::table('users')->where('role','=','teacher')->get()]);
});


Route::post('/addCourse/store',[App\Http\Controllers\CourseController::class,'add'])->name('addCourse');

Route::get('viewCourse',[App\Http\Controllers\CourseController::class,'view'])->name('viewCourse');

Route::get('showCourse',[App\Http\Controllers\CourseController::class,'show'])->name('showCourse');

Route::get('editCourse/{id}',[App\Http\Controllers\CourseController::class,'edit'])->name('editCourse');

Route::post('/updateCourse',[App\Http\Controllers\CourseController::class,'update'])->name('updateCourse');

Route::get('/deleteCourse/{id}', [App\Http\Controllers\CourseController::class,'delete'])->name('deleteCourse');

//-------------------------------------------Edit User Page-----------------------------------------------------------//
Route::get('viewUser',[App\Http\Controllers\AdminController::class,'view'])->name('viewUser');

Route::get('editTeacher/{id}',[App\Http\Controllers\AdminController::class,'editTeacher'])->name('editTeacher');

Route::get('editUser/{id}',[App\Http\Controllers\AdminController::class,'editUser'])->name('editUser');

//-------------------------------------------Teacher Page-----------------------------------------------------------//
Route::get('viewTeacher',[App\Http\Controllers\TeacherController::class,'show'])->name('viewTeacher');

//-------------------------------------------Profile Page-----------------------------------------------------------//
Route::get('profile/{id}',[App\Http\Controllers\UserController::class,'view'])->name('profile');

Route::get('editProfile/{id}',[App\Http\Controllers\UserController::class,'editProfile'])->name('editProfile');

Route::post('/updateProfile',[App\Http\Controllers\UserController::class,'updateProfile'])->name('updateProfile');

//-------------------------------------------Course Detail page-----------------------------------------------------------//
Route::get('/CourseDetails/{id}',[App\Http\Controllers\CourseController::class,'detail'])->name('CourseDetails');

Route::get('/EnrollClass/{id}',[App\Http\Controllers\CourseController::class,'enroll'])->name('enroll.class');

Route::get('editEnrollClass/{id}',[App\Http\Controllers\CourseController::class,'editDescription'])->name('edit.enrollClass');

Route::post('updateEnrollClass',[App\Http\Controllers\CourseController::class,'updateDescription'])->name('update.enrollClass');

//-------------------------------------------Material Page-----------------------------------------------------------//
Route::get('/addMaterial',function(){
    return view('addMaterial',['courseID'=>DB::table('courses')->get()]);
});

Route::post('/addMaterial/store',[App\Http\Controllers\MaterialController::class,'addMaterial'])->name('addMaterial');

Route::get('showMaterial',[App\Http\Controllers\MaterialController::class,'showMaterial'])->name('showMaterial');

Route::get('viewMaterial',[App\Http\Controllers\MaterialController::class,'viewMaterial'])->name('viewMaterial');

Route::get('editMaterial/{id}',[App\Http\Controllers\MaterialController::class,'editMaterial'])->name('editMaterial');

Route::post('/updateMaterial',[App\Http\Controllers\MaterialController::class,'updateMaterial'])->name('updateMaterial');

Route::get('/deleteMaterial/{id}', [App\Http\Controllers\MaterialController::class,'deleteMaterial'])->name('deleteMaterial');

//-------------------------------------------Event Page-----------------------------------------------------------//
Route::get('/event', function () {
    return view('viewEvent');
});

Route::get('/EMathEvent',function(){
    return view('EMathEvent');
});

Route::get('/EMathNameEnter', [App\Http\Controllers\EventController::class,'index'])->name('EMathEvent');

Route::post('/EMathEvent/store',[App\Http\Controllers\EventController::class,'addName'])->name('EMathEvent');

Route::get('/EMathScore',[App\Http\Controllers\EventController::class,'showScore'])->name('EMathScore');

Route::post('/updateEMathGame',[App\Http\Controllers\EventController::class,'updateScore'])->name('updateEMathGame');
/*
Route::get('/EMathGame',function(){
    return view('EMathGame');
});
*/
//Route::get('/EMathGame/{id}',[App\Http\Controllers\EventController::class, 'editScore'])
//->name('EMathGame');

Route::post('/EMathGame',[App\Http\Controllers\EventController::class, 'updateScore'])
->name('EMathGame');

//-------------------------------------------Comment Page-----------------------------------------------------------//
Route::get('/addComment',function(){
    return view('addComment',['courseID'=>DB::table('courses')->get()], ['userID'=>DB::table('users')->get()]);
});

Route::post('/addComment/store',[App\Http\Controllers\CommentController::class,'addComment'])->name('addComment');

Route::get('/viewComment',[App\Http\Controllers\CommentController::class,'viewComment'])
->name('viewComment');

Route::get('/Discussion',[App\Http\Controllers\CommentController::class,'Discussion'])
->name('Discussion');

//-------------------------------------------Hrdf Page-----------------------------------------------------------//
Route::get('/uploadHrdf',function(){
    return view('uploadHrdf',['userID'=>DB::table('users')->get()]);
});

Route::post('/uploadHrdf/store',[App\Http\Controllers\HrdfController::class,'uploadHRDF'])->name('uploadHrdf');

Route::get('/showHrdf',[App\Http\Controllers\HrdfController::class,'showHRDF'])->name('showHrdf');

Route::get('editHrdf/{id}',[App\Http\Controllers\HrdfController::class,'updateHRDF'])->name('editHrdf');

Route::get('rejectHrdf/{id}',[App\Http\Controllers\HrdfController::class,'rejectHRDF'])->name('rejectHrdf');

//-------------------------------------------Contact Us page-----------------------------------------------------------//
Route::get('/addContactUs',function(){
    return view('addContactUs',['courseID'=>DB::table('courses')->get()], ['userID'=>DB::table('users')->get()]);
});

Route::post('/addContactUs/store',[App\Http\Controllers\ContactUsController::class,'addContact'])->name('addContact');

Route::get('/showContactUs',[App\Http\Controllers\ContactUsController::class,'showContact'])->name('showContactUs');


//-------------------------------------------Payment-----------------------------------------------------------//
Route::get('plans/create',[App\Http\Controllers\SubscriptionController::class,'showPlanForm'])->name('plans.create');

Route::post('plans/store',[App\Http\Controllers\SubscriptionController::class,'savePlan'])->name('plans.store');


Route::get('plans',[App\Http\Controllers\SubscriptionController::class,'allPlans'])->name('plans.all');

Route::get('plans/checkout/{planId}',[App\Http\Controllers\SubscriptionController::class,'checkout'])->name('plans.checkout');

Route::post('plans/process',[App\Http\Controllers\SubscriptionController::class,'processPlan'])->name('plans.process');

//-------------------------------------------home Page-----------------------------------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
