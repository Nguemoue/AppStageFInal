<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Unite extends Model
{
    use HasFactory;

    function ville(){
        return $this->belongsTo(Ville::class);
    }

    function chef(){
        return $this->hasOne(Chef::class);
    }

    function elements(){
        return $this->hasMany(User::class,'personnels_id');
    }

    function nbPersonnels(){
        return $this->elements->count();
    }

    function materiels(){
        return $this->hasMany(Materiel::class);
    }
    
    function messages(){
        return $this->hasMany(Message::class);
    }
}
