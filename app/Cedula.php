<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cedula extends Model
{
    protected $fillable = ['no_maestro', 'apellido_pat','apellido_mat','nombres'];
}
