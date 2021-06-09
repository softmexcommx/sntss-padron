<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Padron extends Model
{

    protected $table = 'padron';

   
    /**
     * The primary key for the model.
     *
     * @var string
     */

    protected $primaryKey = 'Matricula';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero', 'Categoria', 'Matricula', 'Nombre', 'Contrato', 'Nombre2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

  
}
