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
        Schema::create('company', function (Blueprint $table) {
        $table->id();
        $table->foreignId('customer_id')->constrained('customers');
        $table->string('cccd_number', 20);
        $table->string('address');
        $table->string('phone', 20);
        $table->string('email', 100)->unique();
        $table->string('tax_code', 20)->unique();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company');
    }
};
