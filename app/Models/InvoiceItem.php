<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    protected $table = 'invoiceitems';
    protected $fillable = [' cantidad','PrecioUnitario', 'subTotal'  ];
    use HasFactory;
    public function product(){
        return $this->belongsTo('App\Models\Producto');
    }
  
}
