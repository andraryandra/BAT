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
        Schema::create('teritory', function (Blueprint $table) {
            $table->id();
            $table->string('teritory_code');
            $table->string('teritory_name');
            $table->text('teritory_comment')->nullable();
            $table->string('teritory_trade_approach');
            $table->string('teritory_status');
            $table->string('teritory_level');
            $table->string('teritory_country');
            $table->date('teritory_start_date')->nullable();
            $table->date('teritory_end_date')->nullable();
            $table->string('teritory_free_field_1')->nullable();
            $table->string('teritory_free_field_2')->nullable();
            $table->string('teritory_free_text_1')->nullable();
            $table->string('teritory_free_text_2')->nullable();
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
        Schema::dropIfExists('teritories');
    }
};
