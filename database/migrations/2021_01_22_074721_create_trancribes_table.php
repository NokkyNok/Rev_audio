<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrancribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trancribes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('User');
            $table->string('format')->nullable;
            $table->string('file')->nullable;
            $table->float('duration')->nullable;
            $table->float('cost')->nullable;
            $table->float('total_cost')->nullable;
            $table->bool('is_paid')->default(false);
            $table->enu('payment_method',['stripe','card','paypal'])->default('paypal');
            
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('trancribes');
    }
}
