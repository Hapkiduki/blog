<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Colocamos el nombre de la tabla
    protected $table = "tags";

    //Definimos los campos que queremos mostrar al usuario
    protected $fillable = ["name"];


     public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeSearchTag($query, $name){
        return $query->where('name', '=', $name);
    }
}
