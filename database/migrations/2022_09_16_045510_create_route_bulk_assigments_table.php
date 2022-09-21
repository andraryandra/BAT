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
        Schema::create('route_bulk_assignment', function (Blueprint $table) {
            $table->id();
            $table->string('route_bulk_assignment_trade_approach');
            $table->string('route_bulk_assignment_teritory');
            $table->string('route_bulk_assignment_route');
            $table->string('route_bulk_assignment_customer_number');
            $table->string('route_bulk_assignment_customer_name');
            $table->string('route_bulk_assignment_order');
            $table->string('route_bulk_assignment_address');
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
        Schema::dropIfExists('route_bulk_assigments');
    }
};
