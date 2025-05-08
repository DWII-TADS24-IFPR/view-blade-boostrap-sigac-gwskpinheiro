<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nivel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'descricao'
    ];

    protected $dates = ['deleted_at'];

    public function cursos(): HasMany
    {
        return $this->hasMany(Curso::class);
    }
}