<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Course;
use App\Models\Category;
use Session;
use Auth;


class CourseController extends Controller
{
    public function add(){
        $r=request();
        $image=$r->file('courseImage');        
        $image->move('images',$image->getClientOriginalName());               
        $imageName=$image->getClientOriginalName(); 
        $addFood=Course::create([
            'name'=>$r->courseName,
            'amount'=>$r->amount,
            'star'=>$r->star,
            'time'=>$r->courseTime,
            'month'=>$r->courseMonth,
            'module'=>$r->courseModule,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Return redirect()->route('viewCourse');
    }

    public function view(){
        $courses=Course::all();
        return view('viewCourse')->with('courses',$courses);
    }

    public function show(){
        $courses=Course::all();
        return view('showCourse')->with('courses',$courses);
    }

    public function edit($id){
        $courses=Course::all()->where('id',$id);
        Return view('viewCourse')->with('courses',$courses)->with('CategoryID',Category::all());
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
        $courses->star=$r->star;
        $courses->time=$r->courseTime;
        $courses->month=$r->courseMonth;
        $courses->module=$r->courseModule;
        $courses->CategoryID=$r->CategoryID;
        $courses->save();

        Return redirect()->route('viewCourse');
    }
}
