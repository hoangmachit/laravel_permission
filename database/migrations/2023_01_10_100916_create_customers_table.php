<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('confirm_code', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('fullname', 255)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('email', 255)->nullable();
            $table->date('birth_day')->nullable();
            $table->string('address', 255)->nullable();
            $table->tinyInteger('gender')->default(1);
            $table->string('login_session', 255)->nullable();
            $table->string('last_login', 255)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('sort')->default(1);
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
        Schema::dropIfExists('customers');
    }
}
