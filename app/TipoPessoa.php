<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPessoa extends Model
{
    protected $table = 'tipo_pessoa';

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'tipo_pessoa_id', 'id');
    }
}
