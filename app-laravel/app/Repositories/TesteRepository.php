<?php 

declare(strict_types=1);

namespace App\Repositories;

//use App\Models\TesteModel;
use App\Interfaces\TesteRepositoryInterface;

class TesteRepository implements TesteRepositoryInterface {
    protected object $marca;

    /*public function __construct(TesteModel $marca){

        $this->marca = $marca;
        
    }*/
    public function getTeste() : object
    {

        return $this->marca
        ->select('marca.*')
        ->orderBy('marca.nome', 'asc')
        ->get();

    }
}

