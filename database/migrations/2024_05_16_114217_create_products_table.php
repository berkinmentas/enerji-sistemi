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
            $table->unsignedBigInteger('product_category_id');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('hot_water_capacity')->nullable();
            $table->string('cold_water_capacity')->nullable();
            $table->string('internal_boiler_thickness')->nullable();
            $table->string('outer_boiler_thickness')->nullable();
            $table->string('tube_length')->nullable();
            $table->string('outer_tube_diameter')->nullable();
            $table->string('inner_tube_diameter')->nullable();
            $table->string('glass_thickness')->nullable();
            $table->string('tube_reflectance_ratio')->nullable();
            $table->string('empty_tube_temperature')->nullable();
            $table->string('tube_material')->nullable();
            $table->string('vacuum')->nullable();
            $table->string('heat_loss_coefficient')->nullable();
            $table->string('light_absorption')->nullable();
            $table->string('surface_coating')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('product_category_id')->references('id')->on('product_categories')->onDelete('cascade');
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
