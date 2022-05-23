<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('video')->nullable();
            $table->string('category_id');
            $table->string('shop_id');
            $table->string('location')->nullable();
            $table->string('price_som')->nullable();
            $table->string('price_usd')->nullable();
            $table->string('area');
            $table->string('date');
            $table->string('room_id');
            $table->string('repair_id');
            $table->string('documents');
            $table->string('description');
            $table->string('material_id');
            $table->string('region_id');
            $table->string('city_id');
            $table->string('street_id');
            $table->string('house_id');
            $table->string('floor_id')->nullable();
            $table->string('flat_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
