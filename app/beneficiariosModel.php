<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beneficiariosModel extends Model
{
    protected $table = 'beneficiarios';
    protected $fillable = ['nombre', 'usuario', 'correo', 'contra'];
}
