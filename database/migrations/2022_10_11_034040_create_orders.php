<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('provider_id'); 
            $table->integer('service_id'); 
            $table->string('total_time',100);
            $table->string('earnings',100);
            $table->enum('status', [
            'created',
            'payed',
            'started',
            'finished',
            'confirmed',
            'closed',
            'canceled',
            ]);
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
        Schema::dropIfExists('orders');
    }
}
