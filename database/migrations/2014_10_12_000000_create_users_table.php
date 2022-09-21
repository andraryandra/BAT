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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('users_employe_id')->nullable();
            $table->string('users_first_name')->nullable();
            $table->string('users_last_name')->nullable();
            $table->string('users_users_name')->nullable();
            $table->string('users_role')->nullable();
            $table->string('users_status')->nullable();
            $table->string('users_type')->nullable();
            $table->string('users_free_field_1')->nullable();
            $table->string('users_free_field_2')->nullable();
            $table->string('users_free_text_field_2')->nullable();
            $table->string('users_email')->unique()->nullable();
            $table->text('users_address')->nullable();
            $table->text('users_phone')->nullable();
            $table->string('password')->nullable();
            $table->string('users_login_status')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
