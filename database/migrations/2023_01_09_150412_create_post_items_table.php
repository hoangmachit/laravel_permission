<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_items', function (Blueprint $table) {
            $table->id();
            $table->string('name_vi', 255)->nullable();
            $table->string('name_en', 255)->nullable();
            $table->string('slug_vi', 255)->nullable();
            $table->string('slug_en', 255)->nullable();
            $table->text('description_vi')->nullable();
            $table->text('description_en')->nullable();
            $table->text('content_vi')->nullable();
            $table->text('content_en')->nullable();
            $table->string('type', 255)->nullable();
            $table->integer('sort')->default(1);
            $table->integer('post_list_id')->nullable();
            $table->integer('post_cat_id')->nullable();
            $table->integer('post_sub_id')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('post_items');
    }
}
