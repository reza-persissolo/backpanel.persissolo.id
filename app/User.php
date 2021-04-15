<?php

namespace App;

use App\Models\Level;
use App\Models\Store;
use App\Models\UserOutlet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'level_id', 'store_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function level(){
        return $this->hasOne(Level::class, 'id', 'level_id');
    }

    public function store(){
        return $this->hasOne(Store::class, 'id', 'store_id');
    }

    public function outlet(){
        return $this->hasOne(UserOutlet::class, 'id', 'user_id');
    }

    public function outlets(){
        return $this->hasMany(UserOutlet::class, 'id', 'user_id');
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){

        return [];
    }
}
