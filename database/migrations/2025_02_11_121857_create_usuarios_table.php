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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80)->nullable(false);
            $table->string('email', 50)->nullable(false)->unique();
            $table->integer('celular')->nullable(false);
            $table->string('estado_civil', 20)->nullable(false);
            $table->date('data_nacimento')->nullable(false);
            $table->string('cidade', 40)->nullable(false);
            $table->string('estado', 40)->nullable(false);
            $table->string('endereco', 60)->nullable(false);
            $table->string('cep', 20)->nullable(false);
            $table->string('password', 30)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
