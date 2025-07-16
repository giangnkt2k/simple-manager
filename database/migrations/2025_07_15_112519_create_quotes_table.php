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
        Schema::create('quotes', function (Blueprint $table) {
        $table->id();
        $table->string('quote_code')->unique();
        $table->foreignId('customer_id')->constrained();
        $table->foreignId('user_id')->constrained();
        $table->string('category', 50);
        $table->decimal('total_amount', 15, 2);
        $table->string('status', 20);
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
