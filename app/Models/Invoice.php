<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [ 'subTotal',' iva', 'total' ];
    public function detail(){
        return $this->hasMany('App\Models\InvoiceItem');
    }

    public function client(){
        return $this->belongsTo('App\Models\Cliente');
    }
}
