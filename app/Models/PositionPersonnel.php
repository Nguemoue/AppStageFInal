<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionPersonnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'intitule','date_debut','date_fin'
    ];
}
