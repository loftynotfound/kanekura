<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('products', function (Blueprint $table) {
      $table->id('product_id');
      $table->foreignId('category_id')->constrained()->restrictOnDelete();
      $table->string('name', 100)->unique();
      $table->string('description', 255)->nullable();
      $table->string('photo')->nullable();
      $table->string('barcode')->unique();
      $table->unsignedInteger('price');
      $table->unsignedInteger('stock')->default(0);
      $table->enum('type', ['order_ready', 'pre_order'])->default('order_ready');
      $table
        ->enum('estimate', ['immediate_pickup', 'seven_working_days'])
        ->default('immediate_pickup');
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
