<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('name_vi', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->text('options')->nullable();
            $table->text('head_js')->nullable();
            $table->text('body_js')->nullable();
            $table->text('mastertool')->nullable();
            $table->text('analytics')->nullable();
            $table->boolean('maintenance')->default(false);
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
        Schema::dropIfExists('configs');
    }
}
