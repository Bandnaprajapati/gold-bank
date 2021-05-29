<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMortgageDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mortgage_data', function (Blueprint $table) {
            $table->id();
             $table->string('customer_type');
            $table->string('metal_type');
            $table->string('product_condition');
            $table->string('customer_name');
            $table->string('customer_contact');
            $table->string('customer_address');
            $table->string('qty');
            $table->string('rate');
            $table->string('given_amount');
            $table->string('rate_of_interest');
            $table->string('tolal_emi');
            $table->string('monthly_emi');
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
        Schema::dropIfExists('mortgage_data');
    }
}
