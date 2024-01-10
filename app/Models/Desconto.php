<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Holerite;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Desconto extends Model
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
