<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\models\Course;
use App\Models\ContactUs;
use App\Models\User;
use Session;

class ContactUsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function addContact(){
        $r=request();

        $addComment=ContactUs::create([
            'userID'=>$r->userID,
            'message'=>$r->message,
            'courseID'=>$r->courseID,
        ]);
            Session:: flash('success',"Successfully! send");
            Return view('welcome');
    }

    public function showContact(){
        $contact=DB::table('contact_us')
        ->leftjoin('users', 'users.id', '=', 'contact_us.userID')
        ->leftjoin('courses', 'courses.id', '=', 'contact_us.courseID')
        ->select('contact_us.*','users.name as userName', 'users.email as userEmail', 'courses.name as courseName')
        ->get();
        Return view('showContactUs')->with('contacts',$contact);
    }
}
