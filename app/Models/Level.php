<?php

namespace App\Mdels;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected  $table = 'tlevel';
    
    public function akses(){
        return $this->hasMany(Akses::class, 'id', 'level_id');
    }
}
