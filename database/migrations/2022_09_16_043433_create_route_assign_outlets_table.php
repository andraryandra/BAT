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
        Schema::create('route_assign_outlet', function (Blueprint $table) {
            $table->id();
            $table->string('route_assign_outlet_order');
            $table->string('route_assign_outlet_customer_number');
            $table->string('route_assign_outlet_customer_name');
            $table->string('route_assign_outlet_address');
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
        Schema::dropIfExists('route_assign_outlets');
    }
};
