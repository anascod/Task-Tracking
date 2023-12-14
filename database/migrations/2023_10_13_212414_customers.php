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
       Schema::create('customers',function(Blueprint $table){
        $table->id();
        $table->string('Cus_name');
        $table->string('Cus_email');
        $table->string('Cus_tel');
        $table->integer('Cus_spend');
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
Schema::dropIfExists('customers');
}
};
