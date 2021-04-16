<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected  $table = 'tmenu';

    public function sub(){
        return $this->hasMany(Menu::class, 'menu_id', 'id')->orderBy('seq', 'asc');
    }

    public function akses(){
        return  $this->hasOne(Menu::class, 'menu_id', 'id');
    }

    public function main(){
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
}
