<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wc_media', function (Blueprint $table) {
            $table->increments('id');

            $table->string('fk_db_key');
            $table->integer('fk_by_id');
            $table->integer('fk_id');
            $table->string('filename');
            $table->string('type')->nullable();
            $table->integer('size')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wc_media');
    }
}
