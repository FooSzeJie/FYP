<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\models\Course;
use App\Models\Comment;
use App\Models\User;
use Auth;
use Session;

class CommentController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function addComment(){
        $r=request();
        $this->middleware('auth');

        $addComment=Comment::create([
            'userID' => Auth::user()->id,
            'comment'=>$r->comment,
            'courseID'=>$r->courseID,
        ]);
            Session:: flash('Success',"Product Create Successfully!");
            Return redirect()->route('Discussion');
    }

    public function viewComment(){
        $comments=DB::table('comments')
        ->leftjoin('users', 'users.id', '=', 'comments.userID')
        ->leftjoin('courses', 'courses.id', '=', 'comments.courseID')
        ->select('comments.*','users.name as userName', 'users.profileImage as profileImage', 'courses.name as courseName')
        ->get();
        
        Return view('viewComment')->with('comments',$comments);
    }

    public function Discussion(){
        $comments=DB::table('comments')
        ->leftjoin('users', 'users.id', '=', 'comments.userID')
        ->leftjoin('courses', 'courses.id', '=', 'comments.courseID')
        ->select('comments.*','users.name as userName', 'users.profileImage as profileImage', 'users.role as userRole', 'courses.id as courseid')
        ->get();
        
        Return view('discussion')->with('comments',$comments);
    }
}
