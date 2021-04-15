<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmenu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 30);
            $table->string('nama', 50);
            $table->string('link', 100)->nullable();
            $table->string('icon', 50)->nullable();
            $table->integer('level')->default(1)->nullable();
            $table->bigInteger('menu_id')->unsigned()->nullable();
            $table->integer('seq')->nullable();
            $table->timestamps();

            $table->foreign('menu_id')->references('id')->on('tmenu')
                ->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
