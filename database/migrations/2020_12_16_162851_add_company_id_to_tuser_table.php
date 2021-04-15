<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompanyIdToTuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tuser', function (Blueprint $table) {
            $table->bigInteger('company_id')->unsigned()->nullable()->after('password');
            
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
        Schema::table('tuser', function (Blueprint $table) {
            //
        });
    }
}
