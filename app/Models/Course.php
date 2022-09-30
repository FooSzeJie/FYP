<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['id','name','amount','image','time','month','module','CategoryID','teacher', 'description'];
    public function course(){
        return $this->belongsTo('App\Models\Category');
    }

    public function ToMaterial(){
        return $this->hasMany('App\Models\Material');
    }

    public function ToCourse(){
        return $this->hasMany('App\Models\Comment');
    }

    public function ToContactUs(){
        return $this->hasMany('App\Models\ContactUs');
    }

    public function ToLesson(){
        return $this->hasMany('App\Models\Lesson');
    }

}