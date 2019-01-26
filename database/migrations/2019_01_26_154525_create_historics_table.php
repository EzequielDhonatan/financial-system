<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historics', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned(); # USER_ID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); # CHAVE ESTRANGEIRA

            $table->enum('type', ['I', 'O', 'T']); # TYPE
            $table->double('amout', 10, 2); # AMOUT
            $table->double('total_before', 10, 2); # TOTAL BEFORE
            $table->double('total_after', 10, 2); # TOTAL AFTER
            $table->double('user_id_transaction', 10, 2)->nullable(); # USER ID TRANSACTION
            $table->date('date'); # DATE

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
        Schema::dropIfExists('historics');
    }
}
