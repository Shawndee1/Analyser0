<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page3 extends Model
{
    use HasFactory;
    public function scopefilter($query , array $filters){
if($filters['page4?search']??false){
    $query->where('description','like','%'.request('page4?search').'%');
}

    }
}
