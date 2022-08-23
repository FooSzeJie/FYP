<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $fillable=['id','name','video','description', 'materials','courseID'];

    public function material(){
        return $this->belongsTo('App\Models\Course');
    }
}
