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
    Schema::create('transactions', function (Blueprint $table) {
      $table->id('transaction_id');
      $table->foreignId('user_id')->constrained()->restrictOnDelete();
      $table->string('invoice_number', 30)->unique();
      $table->unsignedInteger('total');
      $table->unsignedInteger('paid');
      $table->unsignedInteger('change');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('transactions');
  }
};
