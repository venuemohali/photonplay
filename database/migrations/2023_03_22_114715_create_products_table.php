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
            $table->foreignId('category_id')->mullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('color')->nullable();
            $table->text('description')->nullable();
            $table->string('specification')->nullable();
            $table->string('feature')->nullable();
            $table->string('power_option')->nullable();
            $table->string('visibility')->nullable();
            $table->string('ideal_for')->nullable();
            $table->string('warranty')->nullable();
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
