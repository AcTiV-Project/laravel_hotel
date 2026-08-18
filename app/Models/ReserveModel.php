<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReserveModel extends Model
{
    protected $table = 'reservations'; //Seleccionando la tabla

    //Ingresar los datos
    protected $fillable = [
        'name',
        'email',
        'entry_date',
        'departure_date',
        'room_id',
        'people'
    ];
}
