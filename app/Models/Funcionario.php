<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\Holerite;

class Funcionario extends Model
{
    use HasFactory;




    protected $fillable = [
        "nome",
        "rg",
        "cpf",
        "telefone",
        "email",
        "cep",
        "numero",
        "rua",
        "bairro",
        "cidade",
        "estado",
        "pais",
        "salarioBase",
        "qtdDependentes",
        "departamento",
        "cargo",
        "foto",
        "chavePix",
        "dataAdmissao",
        "dataDemissao",
        "estadoCivil",
        "pis",
        "salarioPericulosidade",
        "salarioFamilia",
        "inss"

    ];

    public function holerites(): HasMany {
        return $this->hasMany(Holerite::class);
    }

}
