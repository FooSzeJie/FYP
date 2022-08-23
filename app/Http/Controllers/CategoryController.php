<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function add(){
        $r=request();
        $addCategory=Category::create([
            'name'=>$r->categoryName,
        ]);

        Return redirect()->route('showCategory');
    }

    public function show(){
        $category=Category::all();
        return view('showCategory')->with('categories',$category);
    }

    public function edit($id){
        $category=Category::all()->where('id',$id);
        Return view('editCategory')->with('categories',$category);
        
    } 

    public function update(){
        $r=request();
        $category=Category::find($r->categoryID);  
        
        $category->name=$r->categoryName;
        $category->save();

        Session::flash('success','Category Was update Successfully');
        Return redirect()->route('showCategory');
    }

    public function delete($id)
    {
        $deleteCategory = Category::find($id);
        $deleteCategory -> delete();
        Session:: flash('success',"Category was Delete Successfully!");
        Return redirect()->route('showCategory');
    }
}
