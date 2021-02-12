<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Artigo extends Model
{
    use HasFactory;
    use softDeletes;

    public $incrementing = true;
    protected $fillable = ['titulo', 'descricao', 'conteudo', 'data'];
    protected $dates = ['deleted_at'];
}
