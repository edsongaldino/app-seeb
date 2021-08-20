<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfis';

    public function users()
    {
        return $this->belongsTo(User::class, 'perfil_id', 'id');
    }
}
