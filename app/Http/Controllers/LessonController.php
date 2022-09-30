<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use DB;

class LessonController extends Controller
{
    public function index($CourseID)
    {
        $courses = Course::where('id', $CourseID)
        ->get();

        return view('Lesson.lesson', compact('courses'));
    }

    public function view($CourseID){
        $lessons = Lesson::all()->where('courseID',$CourseID);
        $courses = DB::table('courses')->get();

        // $lessons = DB::table('lessons')
        // ->leftjoin('courses', 'courses.id', '=', 'lessons.courseID')
        // ->select('lessons.*', 'courses.name as courseName', 'courses.image as courseImage')
        // ->get();

        // $lessons = Lesson::where('courseID', $CourseID)
        // ->get();
        return view('Lesson.view', compact('lessons','courses'));
    }

    public function create($CourseID)
    {
        $courses = Course::where('id', $CourseID)
        ->get();

        // return view('Lesson.create', compact('CourseID'));
        return view('Lesson.create',compact('courses'))->with('courseID',Course::all());
    }

    
    public function store($CourseID, Request $request)
    {
        // $video=$request->file('video');        
        // $video->move('videos',$video->getClientOriginalName());               
        // $videoName=$video->getClientOriginalName(); 

        // $material=$request->file('materials');        
        // $material->move('files',$material->getClientOriginalName());                    
        // $fileName=$material->getClientOriginalName();

        $input = $request->all();
        Lesson::create($input + ['courseID' => $CourseID]);

        return view('welcome')->with('flash_message', 'Lesson Added!');
    }

    
    public function show($CourseID, $id)
    {
        $Lessons = Lesson::all()->where('id',$id);
        $courses = Lesson::all()->where('courseID',$CourseID);

        return view('Lesson.show', compact( 'Lessons', 'courses'));
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
