<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use app\Models\Holerite;

class Adicional extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'holerite_id',
        'valor'
    ];

    public function holerite():BelongsTo{
        return $this->belongsTo(Holerite::class);
    }
}
