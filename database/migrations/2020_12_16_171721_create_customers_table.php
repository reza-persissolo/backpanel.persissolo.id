<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcustomer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode', 30)->nullable();
            $table->string('nama', 100);
            $table->bigInteger('company_id')->unsigned();
            $table->string('phone', 20)->unique();
            $table->string('email', 150);
            $table->string('password')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('alamat')->nullable();
            $table->string('image')->nullable();
            $table->integer('jml_trx')->default(0)->nullable();
            $table->timestamp('since')->nullable();
            $table->timestamp('last_visit')->nullable();
            $table->float('lifetime_spend')->default(0)->nullable();
            $table->float('actual_point')->default(0)->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->boolean('isdeleted')->default(false);
            $table->softDeletes();
            
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
        Schema::dropIfExists('customers');
    }
}
