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
        Schema::create('peyments',function(Blueprint $table){
            $table->id();
            $table->string('Bayan_no');
            $table->string('cus_name');
            $table->integer('port_qu');
            $table->integer('port_ch');
            $table->integer('ter_qu');
            $table->integer('ter_ch');
            $table->integer('trans_qu');
            $table->integer('trans_ch');
            $table->integer('do_qu');
            $table->integer('do_ch');
            $table->integer('exten_qu');
            $table->integer('exten_ch');
            $table->integer('duty_qu');
            $table->integer('duty_ch');
            $table->integer('detention_qu');
            $table->integer('detention_ch');
            $table->integer('bad_qu');
            $table->integer('bad_ch');
            $table->integer('oth_qu');
            $table->integer('oth_ch');
            $table->integer('total');
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
        Schema::dropIfExists('peyments');
    }
};
