<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mkategori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('company_id')->unsigned();
            $table->string('nama', 100);
            $table->string('ket')->nullable();
            $table->integer('type');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('kategoris');
    }
}
