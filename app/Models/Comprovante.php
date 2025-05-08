<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comprovante extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'aluno_id',
        'data_envio',
        'arquivo'
    ];

    protected $casts = [
        'data_envio' => 'date',
    ];

    protected $dates = ['deleted_at'];

    public function aluno(): BelongsTo
    {
        return $this->belongsTo(Aluno::class);
    }
}