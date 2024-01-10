<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Mes extends Model
{
    use HasFactory;
    protected $table = 'meses';
    protected $fillable = [
        "nome",


    ];

    public function holerites():HasMany{
        return $this->hasMany(Holerite::class);
    }
    public function exercicio():BelongsTo{
        return $this->belongsTo(Exercicio::class);
    }

    public function mesHolerites(){
        //
    }
}
