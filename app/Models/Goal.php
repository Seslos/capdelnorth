<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $guarded=['id'];
    use HasFactory;
    public function courses(){
        return $this->belongsTo('App\Models\Course');
        }
}
