<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    protected $fillable =["body"];

    // rlacion inversa

    public function courses(){
        return $this->belongsTo('App\Models\Course');
        }
}
