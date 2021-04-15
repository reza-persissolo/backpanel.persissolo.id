<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msupplier', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100);
            $table->bigInteger('company_id')->unsigned();
            $table->string('phone', 30)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota', 50)->nullable();
            $table->string('kodepos', 7)->nullable();
            $table->string('desc')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('isdeleted')->default(false);

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
        Schema::dropIfExists('suppliers');
    }
}
