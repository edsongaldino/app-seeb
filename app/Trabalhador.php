<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabalhador extends Model
{
    protected $table = 'trabalhador';

    public function pessoa()
    {
        return $this->hasOne(Pessoa::class, 'id', 'pessoa_id');
    }
}
