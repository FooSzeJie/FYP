<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable=['id','userID','courseID','message'];
    public function toCourse(){
        return $this->hasMany('App\Models\Course');
    }

    public function fromUser(){
        return $this->hasMany('App\Models\User');
    }

}
