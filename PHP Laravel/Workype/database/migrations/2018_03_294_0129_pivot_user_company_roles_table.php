<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PivotUserCompanyRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wc_pivot_user_company_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_user_id');
            $table->integer('fk_company_id');
            $table->integer('fk_job_title_id');
            $table->text('details')->nullable();
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
        Schema::dropIfExists('wc_pivot_user_company_roles');
    }
}
