<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    protected $table = 'desenvolvedores';

    protected $fillable = [
        'nome', 'sexo', 'idade', 'hobby', 'datanascimento',
    ];
}
