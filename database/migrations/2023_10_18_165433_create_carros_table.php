<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /*


__________________________________________________________________
                        Tabela Carros
__________________________________________________________________
|ID (chave primária) |modelo| marca | ano | matricula | status     |
|          1         | Ibiza| Seat  | 2018| AD-43-CX  | disponivel |
|          2         |                                  alugado    |
|          3         |                                             |
____________________________________________________________________

    */

    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 50);
            $table->string('marca', 50);
            $table->year('ano');
            $table->string('matricula', 50);
            $table->enum('status', ['disponivel', 'alugado'])->default('disponivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
