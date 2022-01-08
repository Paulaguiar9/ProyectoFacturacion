<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $table = 'cliente';
    protected $fillable = ['Nombre','Cedula','Direccion','Telefono','email'];
    public function findByName($q){
        return $this->where('Nombre','like',"%$q%")
        ->get();
    }
}
