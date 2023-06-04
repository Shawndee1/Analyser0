<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page3 extends Model
{
    use HasFactory;
    public function scopeFilter($query , array $filters){
if($filters['search']??false){
    $query->where('description','like','%'.request('search').'%');
}
if($filters['topicscope']??false){
    $query->where('topicscope','like','%'.request('topicscope').'%');
}


    }
}
