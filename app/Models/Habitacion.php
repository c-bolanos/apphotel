<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model 
{ 
    use HasFactory; 
    protected $table = 'habitaciones';
    protected $primaryKey ='id_habitacion';

    public $timestamps = false; 
    protected $fillable = ['nombre_habitacion','piso_habitacion','descripcion','tipo_habitacion','precio_dia','estado']; 
}
