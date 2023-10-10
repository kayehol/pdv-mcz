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
        Schema::create('clientes', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nome');
            $table->string('fone');
            $table->string('endereco');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cnpj')->nullable();
            $table->string('cpf')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
