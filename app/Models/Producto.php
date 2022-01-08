<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable =['nombre','preciocompra','precioventa','stock','alerta','imagen','categoria_id'];

    public function Categoria()
	{
	    return $this->belongsTo(' Nombre','categoria_id');
	}

}
