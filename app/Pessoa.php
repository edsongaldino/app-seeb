<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa';

    public function tipo()
    {
        return $this->hasOne(TipoPessoa::class, 'id', 'tipo_pessoa_id');
    }
}
