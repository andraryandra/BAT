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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_number');
            $table->string('product_status');
            $table->string('product_uom_high');
            $table->string('product_uom_mid');
            $table->string('product_high_to_mid');
            $table->string('product_mid_to_low');
            $table->string('product_manufacture');
            $table->string('product_category');
            $table->string('product_start_date');
            $table->string('product_end_date');
            $table->string('product_sales_uom');
            $table->string('product_uom_low');
            $table->string('product_magnitude_of_low');
            $table->string('product_signature_start_date')->nullable();
            $table->string('product_signature_end_date')->nullable();
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
        Schema::dropIfExists('products');
    }
};
