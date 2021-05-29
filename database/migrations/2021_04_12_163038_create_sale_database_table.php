<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_database', function (Blueprint $table) {
            $table->id();
             $table->string('buyer_type');
            $table->string('metal_type');
            $table->string('product_condition');
            $table->string('buyer_name');
            $table->string('buyer_contact');
            $table->string('buyer_address');
            $table->string('qty');
            $table->string('rate');
            $table->string('total_amount');
            $table->string('payment_type');
            $table->string('book_amount');
            $table->string('emi_count');
             $table->string('rate_of_interest');
             $table->string('emi_amount');
             $table->string('received_amount');
             $table->string('remaining_amount');

            $table->string('date');
             $table->string('remark');

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
        Schema::dropIfExists('sale_database');
    }
}
