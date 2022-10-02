<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Bus\Queueable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table="personnels";
     protected $fillable = [
        'nom',
        'password',
        'matricule'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'date_incorporation'=>'datetime:Y-m-d '
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        // 'profile_photo_url',
    ];

    function positionPersonnel(){
        return $this->belongsTo(PositionPersonnel::class,"position_personnel");
    }

    function unite(){
        return $this->belongsTo(Unite::class);
    }

    function chef(){
        return $this->hasOne(Chef::class,"personnel_id");
    }

    function element(){
        return $this->hasOne(Element::class,"personnel_id");
    }

    function getPersonnelName(){
        return $this->chef?"Chef":"Element";
    }

    function getPersonnel(){
        return $this->getPersonnelName() == "Chef"?$this->chef:$this->element;
    }
}
