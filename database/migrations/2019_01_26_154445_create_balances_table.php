<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->increments('id'); # ID

            $table->integer('user_id')->unsigned(); # USER_ID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); # CHAVE ESTRANGEIRA

            $table->double('amout', 10, 2)->default(0); # AMOUT
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balances');
    }
}
