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
        Schema::create('product_sizes', function (Blueprint $table) {
            $table->id();
            $table->float('size');
            $table->integer('iventory');
            $table->integer('discount');
            $table->integer('sold');
            $table->unsignedBigInteger('variant_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('variant_id')->references('id')->on('product_variants');
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sizes');
    }
};
