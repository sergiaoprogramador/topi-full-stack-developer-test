<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('drink_alternate')->nullable();
            $table->text('instructions');
            $table->string('meal_thumb');
            $table->json('tags')->nullable();
            $table->string('youtube');
            $table->json('ingredients');
            $table->string('source');
            $table->string('image_source')->nullable();
            $table->string('creative_commons_confirmed')->nullable();
            $table->timestamps();

            $table->foreignId('category_id')->constrained();
            $table->foreignId('area_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
}
