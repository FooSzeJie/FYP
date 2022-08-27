<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use Session;
use Auth;


class CourseController extends Controller
{
    /*public function __construct()
    {
    $this->middleware('admin'); 
    }*/


    public function add(){
        
        $r=request();
        $image=$r->file('courseImage');        
        $image->move('images',$image->getClientOriginalName());               
        $imageName=$image->getClientOriginalName(); 
        $addCourse=Course::create([
            'name'=>$r->courseName,
            'amount'=>$r->amount,
            'time'=>$r->courseTime,
            'month'=>$r->courseMonth,
            'module'=>$r->courseModule,
            'CategoryID'=>$r->CategoryID,
            'description'=>$r->description,
            'image'=>$imageName,
            'teacher'=>Auth::user()->id,
        ]);
            Return redirect()->route('viewCourse');
    }


    public function view(){
        $courses = DB::table('courses')
        ->leftjoin('categories', 'categories.id', '=', 'courses.CategoryID')
        ->select('courses.*', 'categories.name as categoryName')
        ->get();

        return view('viewCourse')->with('courses',$courses);
    }

    public function show(){
        $courses = DB::table('courses')
        //-get();
        ->paginate(5);

        return view('showCourse')->with('courses',$courses);
    }

    public function edit($id){
        $courses=Course::all()->where('id',$id);

        Return view('editCourse')
        ->with('courses',$courses)
        ->with('CategoryID',Category::all())
        ->with('teachers', User::all()->where('role','=','teacher'));
    } 

    public function update(){
        $r=request();
        $courses=Course::find($r->courseID);
        
        if($r->file('courseImage')!=''){
            $image=$r->file('courseImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $courses->image=$imageName;
            }    
        
        $courses->name=$r->courseName;
        $courses->amount=$r->amount;
        $courses->time=$r->courseTime;
        $courses->month=$r->courseMonth;
        $courses->module=$r->courseModule;
        $courses->CategoryID=$r->CategoryID;
        $courses->description=$r->description;
        $courses->teacher=Auth::user()->id;
        $courses->save();

        Session::flash('success','Course Was update Successfully');
        Return redirect()->route('viewCourse');
    }

    public function delete($id)
    {
        $deleteCourse = Course::find($id);
        $deleteCourse -> delete();
        Session:: flash('success',"Course was Delete Successfully!");
        Return redirect()->route('viewCourse');
    }

    public function detail($id){
        $courses=Course::all()->where('id',$id);
        Return view('CourseDetails')->with('courses',$courses)->with('CategoryID',Category::all());
    } 

    public function enroll($id){
        $courses=Course::all()->where('id',$id);
        Return view('EnrollClass')->with('courses',$courses);
    } 
}
