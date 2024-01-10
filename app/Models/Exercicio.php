<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Exercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        "nome",
        "atual",


    ];

    public function meses(): HasMany {
        return $this->hasMany(Mes::class);
    }

    
}
