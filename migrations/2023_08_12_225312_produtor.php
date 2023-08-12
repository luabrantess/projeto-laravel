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
        Schema::create('produtor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('valor'*0.75)->constrained('vendas')->onDelete('cascade')->onUpdate('cascade');
            $table->char('nome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtor');
    }
};