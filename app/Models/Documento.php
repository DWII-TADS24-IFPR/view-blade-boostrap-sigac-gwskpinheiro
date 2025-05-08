<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'aluno_id',
        'tipo',
        'numero'
    ];

    protected $dates = ['deleted_at'];

    // Tipos permitidos (enum)
    const TIPOS = [
        'RG',
        'CPF',
        'Certidão',
        'Histórico'
    ];

    public function aluno(): BelongsTo
    {
        return $this->belongsTo(Aluno::class);
    }
}