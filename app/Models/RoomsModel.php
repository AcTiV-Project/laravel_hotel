<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class RoomsModel extends Model
    {
        //Seleccionando la tabla 'rooms'
        protected $table = 'rooms';

        protected $fillable = [
            'number',
            'type',
            'capacity',
            'price',
            'status',
            'description' 
        ];

    }
?>