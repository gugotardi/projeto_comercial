<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelEmpresa extends Model
{
    protected $table='empresas';
    protected $fillable=['title','phone','adress','zipcode','city','state','drescription','category'];

 
}
