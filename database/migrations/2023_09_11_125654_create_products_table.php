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
            $table->string('product_name', 100)->unique();
            $table->string('category', 100);
            $table->integer('quantity_of_product');
            $table->integer('price');
            $table->text('product_characteristics');
            $table->text('description');
            $table->string('product_image');
            $table->enum('users_raiting', [0, 1, 2, 3, 4, 5,])->default(0);
            $table->timestamps();
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
