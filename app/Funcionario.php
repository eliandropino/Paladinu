<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionarios";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome','email', 'rg', 'sexo','codigo','senha','chapa','funcaoid','ativo'];
}
