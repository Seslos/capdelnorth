<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Level extends Model{
    use HasFactory;
    // relacion uno muchos

    protected $guarded=['id'];
    public function courses(){
        return $this->belongsTo('App\Models\Course');
        }
}
