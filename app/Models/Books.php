<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author_id',
        'title',
        'ISBN',
        'pub_year',
        'available',
    ];

    public function Author(){
        return $this->belongsTo(Authors::class);
    }
    public function scopeSearch($query,$search){
        if($search && $search != ""){
            return $query->where("name","like","%$search%");
        }
        return $query;
    }
}
