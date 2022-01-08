<?php

namespace App\Repositories;

use App\Models\Cliente;

class ClientRepository {
    private $model;
    
    public function __construct(){
        $this->model = new Cliente();
    }

    public function findByName($q) {
        return $this->model->where('Cedula', 'like', "%$q%")
                           ->get();
    }
} 