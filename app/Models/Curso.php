<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'duracao',
        'nivel_id'
    ];

    protected $dates = ['deleted_at'];

    // Relacionamentos
    public function nivel(): BelongsTo
    {
        return $this->belongsTo(Nivel::class);
    }

    public function turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }
}