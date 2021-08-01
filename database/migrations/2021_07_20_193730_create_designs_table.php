<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->string('name');
            $table->integer('design_number')->unique();
            $table->unsignedBigInteger('color_id');
            $table->float('cmyk_front')->nullable();
            $table->float('w_front')->nullable();
            $table->integer('ink_front')->nullable();
            $table->float('cmyk_back')->nullable();
            $table->float('w_back')->nullable();
            $table->integer('total_cost')->nullable();
            $table->integer('price');
            $table->integer('discounted_price')->nullable();
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('ink_level_id');
            $table->unsignedBigInteger('store_id');
            $table->timestamps();
            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('ink_level_id')->references('id')->on('ink_levels');
            $table->foreign('store_id')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designs');
    }
}
