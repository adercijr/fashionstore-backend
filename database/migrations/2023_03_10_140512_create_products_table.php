<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->text('description');
            $table->string('category');
            $table->string('style');
            $table->string('activity');
            $table->string('gender');
            $table->timestamps();

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('product_brands');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('product_categories');

            $table->unsignedBigInteger('style_id');
            $table->foreign('style_id')->references('id')->on('product_styles');

            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('product_activities');

            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id')->references('id')->on('product_genders');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
