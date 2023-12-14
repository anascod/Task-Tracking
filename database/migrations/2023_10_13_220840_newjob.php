<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newjob',function(Blueprint $table){
            $table->id();
            $table->string('Cus_name');
            $table->string('draft');
            $table->string('bayan_no');
            $table->string('whight');
            $table->string('port_name');
            $table->string('bayan_type');
            $table->date('bayan_date');
            $table->string('bayan_status');
            $table->string('bayan_coo');
            $table->string('bayan_arival');
            $table->string('bayan_do');
            $table->string('bayan_expire');
            $table->string('bayan_bl');
            $table->timestamps();
    
           });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newjob');
    }
};
