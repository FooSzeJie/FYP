<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable=['id','name','video','lesson', 'materials','courseID'];

    public function lesson(){
        return $this->belongsTo('App\Models\Course');
    }
}
