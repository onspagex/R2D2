<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complemento extends Model
{
    protected $table = 'complementos';
    protected $timestamps = false;

    public function ambientes()
    {
        return $this->belongsTo('Reserva\Ambiente');
    }
}
