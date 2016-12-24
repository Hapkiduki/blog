<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Colocamos el nombre de la tabla
    protected $table = "images";

    //Definimos los campos que queremos mostrar al usuario
    protected $fillable = ["name", "article_id"];


    public function article()
    {
    	return $this->belongsTo('App\Article');
    }
}
