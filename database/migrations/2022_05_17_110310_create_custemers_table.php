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
        Schema::create('custemers', function (Blueprint $table) {
            $table->id();
            
            $table->string('c_lname');
            $table->string('c_fname');
            $table->string('c_sex');
            $table->string('c_brithdate');
            $table->string('c_email');
            $table->integer('c_phone');
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
        Schema::dropIfExists('custemers');
    }
};
