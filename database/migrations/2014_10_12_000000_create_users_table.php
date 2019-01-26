<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); # ID
            $table->string('name'); # NAME
            $table->string('email')->unique(); # E-MAIL
            $table->timestamp('email_verified_at')->nullable(); # E-MAIL VERIFIED AT
            $table->string('password'); # PASSWORD

            $table->string('image', 100)->nullable(); # IMAGE

            $table->rememberToken();
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
}
