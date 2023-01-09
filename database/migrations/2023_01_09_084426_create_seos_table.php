<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('title_vi', 255)->nullable();
            $table->string('title_en', 255)->nullable();
            $table->string('keyword_vi', 255)->nullable();
            $table->string('keyword_en', 255)->nullable();
            $table->string('description_vi')->nullable();
            $table->string('description_en')->nullable();
            $table->string('robots', 100)->nullable();
            $table->string('type', 255)->nullable();
            $table->integer('type_id')->nullable();
            $table->text('schema_vi')->nullable();
            $table->text('schema_en')->nullable();
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
        Schema::dropIfExists('seos');
    }
}
