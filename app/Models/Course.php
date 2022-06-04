<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['id','name','amount','image','star','time','month','module','CategoryID'];
    public function course(){
        return $this->belongsTo('App\Models\Category');
    }

}