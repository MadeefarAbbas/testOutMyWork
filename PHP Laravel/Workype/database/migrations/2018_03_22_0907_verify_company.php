<?php use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VerifyCompany extends Migration
{
    
    public function up()
    {
       Schema::create('verify_companies',function (Blueprint $table) {
            $table->increments('id');
            $table->string('token');
            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('wc_companies');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('verify_company');
    }
}
