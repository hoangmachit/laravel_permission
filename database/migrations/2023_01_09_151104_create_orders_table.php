<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->integer('customer_id')->default(0);
            $table->integer('payment_id')->nullable();
            $table->integer('device_type_id')->nullable();
            $table->string('browser', 255)->nullable();
            $table->string('ip_address', 10)->nullable();
            $table->string('code', 10)->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('phone', 12)->nullable();
            $table->string('address', 255)->nullable();
            $table->double('temp_price', 12, 2)->default(0);
            $table->double('ship_price', 12, 2)->default(0);
            $table->double('use_point', 12, 2)->default(0);
            $table->double('sub_price', 12, 2)->default(0);
            $table->double('total_price', 12, 2)->default(0);
            $table->integer('city')->default(0);
            $table->integer('district')->default(0);
            $table->integer('ward')->default(0);
            $table->string('notes', 255)->nullable();
            $table->string('requirements')->nullable();
            $table->integer('sort')->default(1);
            $table->integer('order_status_id')->default(0);
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
