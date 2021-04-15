<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mproduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned();
            $table->integer('tipe');
            $table->string('kode', 50)->nullable();
            $table->string('nama', 100);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('satuan_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->double('hpp')->default(0)->nullable();
            $table->double('harga')->default(0)->nullable();
            $table->text('desc')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('isdeleted')->default(false);

            $table->foreign('category_id')->references('id')->on('mkategori')
                ->onDelete('restrict')->onUpdate("cascade");
            $table->foreign('satuan_id')->references('id')->on('msatuan')
                ->onDelete('restrict')->onUpdate("cascade");
            $table->foreign('company_id')->references('id')->on('mcompany')
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
        Schema::dropIfExists('produks');
    }
}
