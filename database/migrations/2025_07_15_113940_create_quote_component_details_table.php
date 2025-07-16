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
        Schema::create('quote_component_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('quote_component_id')
            ->constrained('quote_components');
        $table->string('label', 255);
        $table->string('value', 255)->nullable();
        $table->string('unit', 50);
        $table->string('note', 500)->nullable();

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_component_details');
    }
};
