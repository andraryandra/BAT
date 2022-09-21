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
        Schema::create('route_bulk_scheduling', function (Blueprint $table) {
            $table->id();
            $table->string('route_bulk_scheduling_teritory');
            $table->string('route_bulk_scheduling_trade_approach');
            $table->string('route_bulk_scheduling_route');
            $table->date('route_bulk_scheduling_route_date');
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
        Schema::dropIfExists('route_bulk_schedulings');
    }
};
