<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["categoria_id","nombre","descripcion","descripcion_larga","preparacion","aplicacion","caracteristicas","img","img_chica","slug"];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }
    public function getLaCategoriaAttribute(){
    	return $this->categoria->nombre;
    }


}
