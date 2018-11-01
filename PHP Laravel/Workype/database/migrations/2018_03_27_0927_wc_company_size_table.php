<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WcCompanySizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wc_company_size', function (Blueprint $table) {
            $table->increments('id');
            $table->string('from');
            $table->string('to');
            $table->integer('fk_by');
           // $table->timestamps();
        });
        
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wc_company_size');
    }
}
