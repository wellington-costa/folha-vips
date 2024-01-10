<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;





class Holerite extends Model
{
    use HasFactory;


    protected $fillable = [
        'valorTotal',
        'description'

    ];

    public function descontos():HasMany{
        return $this->hasMany(Desconto::class);
    }
    public function adicionais():HasMany{
        return $this->hasMany(Adicional::class);
    }

    public function funcionario():BelongsTo{
        return $this->belongsTo(Funcionario::class);
    }

    public function mes():BelongsTo{
        return $this->belongsTo(Mes::class);
    }
}
