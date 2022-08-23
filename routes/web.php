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

//Category Page
Route::get('/addCategory',function(){
    return view('addCategory');
});

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'show'])->name('showCourse');

//Course Page
Route::get('/addCourse',function(){
    return view('addCourse',['categoryID'=>DB::table('categories')->get()],['teachers'=>DB::table('users')->where('role','=','teacher')->get()]);
});


Route::post('/addCourse/store',[App\Http\Controllers\CourseController::class,'add'])->name('addCourse');

Route::get('viewCourse',[App\Http\Controllers\CourseController::class,'view'])->name('viewCourse');

Route::get('showCourse',[App\Http\Controllers\CourseController::class,'show'])->name('showCourse');

Route::get('editCourse/{id}',[App\Http\Controllers\CourseController::class,'edit'])->name('editCourse');

Route::post('/updateCourse',[App\Http\Controllers\CourseController::class,'update'])->name('updateCourse');

Route::get('/deleteCourse/{id}', [App\Http\Controllers\CourseController::class,'delete'])->name('deleteCourse');

//Edit User Page
Route::get('viewUser',[App\Http\Controllers\AdminController::class,'view'])->name('viewUser');

Route::get('editTeacher/{id}',[App\Http\Controllers\AdminController::class,'editTeacher'])->name('editTeacher');

Route::get('editUser/{id}',[App\Http\Controllers\AdminController::class,'editUser'])->name('editUser');

//Route::post('updateRole',[App\Http\Controllers\AdminController::class,'update'])->name('updateRole');

//Payment Page
Route::post('/paymentPage', [App\Http\Controllers\PaymentController::class, 'passCost'])->name('paymentPage');

Route::post('/checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

//Subscribe page
Route::get('/addSubscribe',function(){
    return view('addSubscribe');
});

Route::post('/addSubscribe/store',[App\Http\Controllers\SubscribeController::class,'add'])->name('addSubscribe');

Route::get('showSubscribe',[App\Http\Controllers\SubscribeController::class,'show'])->name('showSubscribe');

//Teacher Page
Route::get('viewTeacher',[App\Http\Controllers\TeacherController::class,'show'])->name('viewTeacher');

//Profile Page
Route::get('profile/{id}',[App\Http\Controllers\UserController::class,'view'])->name('profile');


//Confirm Role
Route::get('/admin', function(){
    return view('/welcome')->with('message','Welcome admin');
})->middleware('admin');

Route::get('/user', function(){
    return view('/welcome')->with('message','Welcome user');
})->middleware('user');

Route::get('/teacher', function(){
    echo "Hello Teacher";
})->middleware('teacher');

//Verify Email
Route::group(['middleware' => ['auth']], function() {
    Route::get('/email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', 'VerificationController@resend')->name('verification.resend');
});

//only authenticated can access this group
Route::group(['middleware' => ['auth']], function() {
    //only verified account can access with this group
    Route::group(['middleware' => ['verified']], function() {
            /**
             * Dashboard Routes
             */
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    });
});

//course page
Route::get('/CourseDetails/{id}',[App\Http\Controllers\CourseController::class,'detail'])->name('CourseDetails');

Route::get('/EnrollClass/{id}',[App\Http\Controllers\CourseController::class,'enroll'])->name('enroll.class');

Route::get('editEnrollClass/{id}',[App\Http\Controllers\CourseController::class,'editDescription'])->name('edit.enrollClass');

Route::post('updateEnrollClass',[App\Http\Controllers\CourseController::class,'updateDescription'])->name('update.enrollClass');

//Material Page
Route::get('/addMaterial',function(){
    return view('addMaterial',['courseID'=>DB::table('courses')->get()]);
});

Route::post('/addMaterial/store',[App\Http\Controllers\MaterialController::class,'addMaterial'])->name('addMaterial');

Route::get('showMaterial',[App\Http\Controllers\MaterialController::class,'showMaterial'])->name('showMaterial');

Route::get('viewMaterial',[App\Http\Controllers\MaterialController::class,'viewMaterial'])->name('viewMaterial');

//Event Page
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

Route::get('/viewComment',[App\Http\Controllers\CommentController::class,'viewComment'])
->name('viewComment');

Route::post('/addComment/store',[App\Http\Controllers\CommentController::class,'addComment'])->name('addComment');

Route::get('/Discussion',[App\Http\Controllers\CommentController::class,'Discussion'])
->name('Discussion');

//Hrdf Page
Route::get('/uploadHrdf',function(){
    return view('uploadHrdf',['userID'=>DB::table('users')->get()]);
});

Route::post('/uploadHrdf/store',[App\Http\Controllers\HrdfController::class,'uploadHRDF'])->name('uploadHrdf');

Route::get('/showHrdf',[App\Http\Controllers\HrdfController::class,'showHRDF'])->name('showHrdf');

Route::get('editHrdf/{id}',[App\Http\Controllers\HrdfController::class,'updateHRDF'])->name('editHrdf');

Route::get('rejectHrdf/{id}',[App\Http\Controllers\HrdfController::class,'rejectHRDF'])->name('rejectHrdf');

//home
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
