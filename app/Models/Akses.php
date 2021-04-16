<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    protected  $table = 'takses';
    
    public function menu(){
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
}
