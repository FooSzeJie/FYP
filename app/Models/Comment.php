<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['id','userID', 'comment', 'courseID'];
    
    public function comment(){
        return $this->belongsTo('App\Models\Course');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
