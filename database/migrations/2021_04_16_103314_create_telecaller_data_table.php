<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelecallerDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telecaller_data', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->string('user_id');
            $table->string('password');
            $table->string('user_image');
            $table->string('id_proof');
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
        Schema::dropIfExists('telecaller_data');
    }
}
