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
 _____________________________________________________________________
|                        Tabela Clientes                              |
|_____________________________________________________________________|
|ID (chave primária) | Nome | Num_Carta_Conducao | Telemovel | E-mail |
|    1               | Rute |  39948484 ZZ7      | 897654374| rute@hot|
|_____________________________________________________________________|

 */

    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('num_carta_conducao', 50);
            $table->string('telemovel', 50);
            $table->string('email', 80);
            $table->timestamps();
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
