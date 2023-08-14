<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    protected $fillable = ['vendas_valor'];
    protected $table = 'produto';

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

    public function afiliado(): BelongsTo
    {
        return $this->belongsTo(Afiliado::class);
    }

    public function produtor(): BelongsTo
    {
        return $this->belongsTo(Produtor::class);
    }
}
