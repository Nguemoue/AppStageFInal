<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Courrier extends Model
{
    use HasFactory;
    protected $table = "couriers";
    protected $fillable = [
        'intitule',
        'contenu',
        'unite_id'
    ];

    function unite(){
        return $this->belongsTo(Unit::class);
    }

}
