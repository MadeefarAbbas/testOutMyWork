<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wc_companies', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('fk_user_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('fk_company_type')->nullable();
            $table->string('established_year')->nullable();
            $table->integer('fk_company_size')->nullable();
            $table->integer('fk_user_help')->nullable();
            $table->integer('fk_user_primary')->nullable();

            $table->text('technology')->nullable();
            $table->text('convention')->nullable();

            $table->integer('verified')->default(0);
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
        Schema::dropIfExists('companies');
    }
}
