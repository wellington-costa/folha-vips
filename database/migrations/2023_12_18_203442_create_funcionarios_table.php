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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('rg');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('email');
            $table->string('cep');
            $table->string('numero');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais');
            $table->float('salarioBase');
            $table->integer('qtdDependentes');
            $table->string('departamento');
            $table->string('cargo');
            $table->string('foto')->nullable();
            $table->string('chavePix');
            $table->date('dataAdmissao');
            $table->date('dataDemissao')->nullable();
            $table->string('estadoCivil');
            $table->string('pis');
            $table->float("salarioPericulosidade")->nullable();
            $table->float("salarioFamilia")->nullable();
            $table->float("inss")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
