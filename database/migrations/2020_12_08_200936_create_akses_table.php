<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('level_id')->unsigned();
            $table->bigInteger('menu_id')->unsigned();
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('tlevel')
                ->onDelete('cascade')->onUpdate("cascade");
            $table->foreign('menu_id')->references('id')->on('tmenu')
                ->onDelete('restrict')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akses');
    }
}
