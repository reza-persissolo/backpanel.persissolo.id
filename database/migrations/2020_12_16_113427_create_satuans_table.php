<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSatuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msatuan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 5)->nullable();
            $table->string('nama', 50);
            $table->string('ket')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('isdeleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satuans');
    }
}
