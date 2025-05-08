<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Declaracao extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'aluno_id',
        'data_emissao',
        'codigo'
    ];

    protected $casts = [
        'data_emissao' => 'date',
    ];

    protected $dates = ['deleted_at'];

    public function aluno(): BelongsTo
    {
        return $this->belongsTo(Aluno::class);
    }
}