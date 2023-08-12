<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vendas extends Model
{

    protected $fillable = ['vendas_valor'];

    use HasFactory;

    public function afiliado(): BelongsTo
    {
        return $this->belongsTo(Afiliado::class);
    }

    public function produtor(): BelongsTo
    {
        return $this->belongsTo(Produtor::class);
    }

    public function produto(): BelongsTo
    {
        return $this->belongsTo(Produto::class);
    }
}
