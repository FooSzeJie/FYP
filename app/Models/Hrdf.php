<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hrdf extends Model
{
    use HasFactory;
    protected $fillable=['id','userID','status'];

    public function Hrdf(){
        return $this->belongsTo('App\Models\User');
    }
}
