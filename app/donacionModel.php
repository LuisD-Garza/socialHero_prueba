<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donacionModel extends Model
{
    protected $table = 'table_donaciones';
    protected $fillable = ['donador', 'monto', 'beneficiarios_id'];
}
