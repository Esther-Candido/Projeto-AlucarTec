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
     *
 _____________________________________________________________________________________________________________________________________________
|                        Tabela Aluguéis                                                                                                      |
|_____________________________________________________________________________________________________________________________________________|
|ID (chave primária) | ID_Carro (chave estrangeira)(**)| ID_Cliente (chave estrangeira)(**)| Data_Início    | Data_fim        | Valor Total   |
|         1          |               1                 |              1                    | 18.10.23       |     25.10.23    |   100$        |
|_____________________________________________________________________________________________________________________________________________|

     *
     */
    public function up(): void
    {
        Schema::create('aluguel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_carro')->constrained('carros'); //chave estrangeira do id da table carros
            $table->foreignId('id_cliente')->constrained('clientes'); //chave estrangeira do id da table clientes
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->float('valor_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluguel');
    }
};
