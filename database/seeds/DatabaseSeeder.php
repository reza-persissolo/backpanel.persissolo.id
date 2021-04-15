<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

//         $this->call(AllTableSeeder::class);
//         $this->call(MenuTableSeeder::class);
//         $this->call(PaymentMethodTableSeeder::class);
//         $this->call(SalesTypeTableSeeder::class);
//        $this->call(LevelTableSeeder::class);
//        $this->call(BenerneRecipeSedeer::class);
//        $this->call(ProductOutletTableSeeder::class);
//        $this->call(InventoriesTableSedeer::class);
//        $this->call(Tanggal17SalesSeeder::class);
//        $this->call(AdjustmentStockSeeder::class);
//        $this->call(Sales2InventSeeder::class);
        $this->call(SetingTableSeeder::class);
    }
}
