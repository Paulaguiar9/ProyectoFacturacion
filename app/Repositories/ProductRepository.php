<?php

namespace App\Repositories;

use App\Models\Producto;

class ProductRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Producto();
    }

    public function findByName($q) {
        return $this->model->where('nombre', 'like', "%$q%")
                           ->get();
    }
}