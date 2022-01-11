<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('barcode');
            $table->integer('weight');
            $table->string('unit');
            $table->text('serving');
            $table->json('engergy');
            $table->json('fat');
            $table->json('of_which_saturates');
            $table->json('carbohydrates');
            $table->json('of_which_sugars');
            $table->json('fiber');
            $table->json('protein');
            $table->json('salt');
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
        Schema::dropIfExists('food');
    }
}
