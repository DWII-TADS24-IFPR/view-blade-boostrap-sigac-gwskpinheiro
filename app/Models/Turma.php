<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Turma extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'curso_id',
        'data_inicio'
    ];

    protected $casts = [
        'data_inicio' => 'date',
    ];

    protected $dates = ['deleted_at'];

    // Relacionamentos
    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class);
    }

    public function alunos(): BelongsToMany
    {
        return $this->belongsToMany(Aluno::class);
    }
}