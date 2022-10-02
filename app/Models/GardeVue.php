<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class GardeVue extends Model
{
    use HasFactory;

    function unite(){
        return $this->belongsTo(Unit::class);
    }
}
