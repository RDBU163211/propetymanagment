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
        Schema::create('store_keepers', function (Blueprint $table) {
            $table->id();
              
            $table->string('s_lname');
            $table->string('s_fname');
            $table->string('s_sex');
            $table->string('s_brithdate');
            $table->string('s_email');
            $table->integer('s_phone');
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
        Schema::dropIfExists('store_keepers');
    }
};
