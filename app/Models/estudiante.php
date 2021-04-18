<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
    protected $table="estudiante";
    protected $primaryKey="Matricula";
    protected$fillable = [

	'Nombre','Direccion','Edad',
    ];

    public $timestamps=false;

}
