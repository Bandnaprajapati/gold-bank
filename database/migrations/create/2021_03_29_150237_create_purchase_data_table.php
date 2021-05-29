<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_data', function (Blueprint $table) {
            $table->id();
            $table->string('seller_type');
            $table->string('metal_type');
            $table->string('gold_condition');
            $table->string('seller_name');
            $table->string('seller_contact');
            $table->string('seller_address');
            $table->string('qty');
            $table->string('rate');
            $table->string('given_amount');
            $table->string('remaining_amount');
            $table->string('date');

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
        Schema::dropIfExists('purchase_data');
    }
}
