<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Colocamos el nombre de la tabla
    protected $table = "categories";

    //Definimos los campos que queremos mostrar al usuario
    protected $fillable = ["name"];

    public function articles()
    {
         return $this->hasMany('App\Article');
    }

}
