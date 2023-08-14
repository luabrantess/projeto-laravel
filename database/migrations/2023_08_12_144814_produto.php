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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->binary('foto');
            $table->foreignId('afiliado')->constrained('afiliado')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produtor')->constrained('produtor')->onDelete('cascade')->onUpdate('cascade');
            $table->char('nome');
            $table->text('descricao');
            $table->float('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};