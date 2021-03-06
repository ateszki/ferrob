<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["categoria_id","nombre","descripcion","descripcion_larga","preparacion","aplicacion","caracteristicas"];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }
}
