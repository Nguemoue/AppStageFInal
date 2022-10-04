<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'etat','quantite','unite_id','designation'
    ];

    public function  unite(){
        return $this->belongsTo(Unite::class);
    }

    public function typeMateriel(){
        return $this->belongsTo(TypeMateriel::class,'type_materiel');
    }




}
