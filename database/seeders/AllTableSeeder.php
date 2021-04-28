<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User();
        $user->name     = 'Reza Mandala';
        $user->email    = 'reza@persissolo.id';
        $user->password = \Illuminate\Support\Facades\Hash::make("admin");
        $user->save();

        $user = new \App\Models\User();
        $user->name     = 'Katharina';
        $user->email    = 'katharina@persissolo.id';
        $user->password = \Illuminate\Support\Facades\Hash::make("admin");
        $user->save();
        
    }
}
