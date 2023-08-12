<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Produtor extends Model
{
    protected $fillable = ['vendas_valor'];

    use HasFactory;

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        
    }

    public function vendas(): BelongsTo
    {
        return $this->belongsTo(Vendas::class);
    }
}