<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        "element_id",
        "message",
        "unite_id"
    ];

    public function unite(){
        return $this->belongsTo(Unite::class);
    }
}
