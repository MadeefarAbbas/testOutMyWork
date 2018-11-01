<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WcCompanyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wc_company_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_company_id');
            $table->string('title');
            $table->text('overview')->nullable();
            $table->text('features')->nullable();
            $table->text('benefits')->nullable();
            // logo // gallery





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
        Schema::dropIfExists('wc_company_products');
    }
}
