<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Unite extends Model
{
    use HasFactory;

    function  getTypeUnite(){
        if($this->brigade){
            return  $this->brigade;
        }elseif ($this->compagnie)
            return $this->compagnie;
        return  null;
    }
    function getTypeUniteName(){
        if($this->brigade)
            return "brigrade";
        elseif ($this->compagnie)
            return "compagnie";
        return "";
    }
    function brigade(){
        return $this->hasOne(Brigade::class);
    }
    function compagnie(){
        return $this->hasOne(Compagnie::class);
    }
    function ville(){
        return $this->belongsTo(Ville::class);
    }

    function chef(){
        return $this->hasOne(Chef::class);
    }

    function elements(){
        return $this->hasMany(Element::class,'unite_id');
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
