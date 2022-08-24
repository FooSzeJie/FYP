<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Material;
use App\Models\Course;
use Session;

class MaterialController extends Controller
{
    public function addMaterial(){
        $r=request();
        $video=$r->file('video');        
        $video->move('videos',$video->getClientOriginalName());               
        $videoName=$video->getClientOriginalName(); 

        $material=$r->file('materials');        
        $material->move('files',$material->getClientOriginalName());                    
        $fileName=$material->getClientOriginalName(); 

        $addMaterial=Material::create([
            'name'=>$r->materialName,
            'video'=>$videoName,
            'description'=>$r->description,
            'materials'=>$fileName,
            'courseID'=>$r->courseID,
        ]);
            Return redirect()->route('viewMaterial');
    }

    public function showMaterial(){
        $materials=Material::all();
        return view('showMaterial')->with('materialed',$materials);
    }

    public function viewMaterial(){
        $materials=DB::table('materials')
        ->select('materials.*')
        ->get();
        return view('viewMaterial')->with('materialed',$materials);         
    }

    public function editMaterial($id){
        $material=Material::all()->where('id',$id);
        Return view('editMaterial')
        ->with('material',$material)
        ->with('CourseID',Course::all());
        
    } 

    public function updateMaterial(){
        $r=request();
        $material=Material::find($r->courseID);
        
        if($r->file('video')!=''){
            $video=$r->file('video');        
            $video->move('videos',$video->getClientOriginalName());                   
            $videoName=$video->getClientOriginalName(); 
            $material->video=$videoName;
            }    

            if($r->file('materials')!=''){
                $materials=$r->file('materials');        
                $materials->move('files',$materials->getClientOriginalName());                   
                $materialsName=$materials->getClientOriginalName(); 
                $material->materials=$materialsName;
                } 
        
        $material->name=$r->materialName;
        $material->description=$r->description;
        $material->courseID=$r->courseID;
        $material->save();

        Session::flash('success','Course Was update Successfully');
        Return redirect()->route('viewMaterial');
    }

    public function deleteMaterial($id)
    {
        $deleteMaterial = Material::find($id);
        $deleteMaterial -> delete();
        Session:: flash('success',"Course was Delete Successfully!");
        Return redirect()->route('viewMaterial');
    }
}
