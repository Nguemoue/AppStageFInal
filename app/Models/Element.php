<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;

    function unite(){
        return $this->belongsTo(Unite::class);
    }

    function messages(){
        return $this->hasMany(Message::class);
    }
    function personnel(){
        return $this->belongsTo(User::class,"personnel_id");
    }

}
