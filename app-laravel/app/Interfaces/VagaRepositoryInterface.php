<?php

namespace App\Interfaces;

interface VagaRepositoryInterface 
{
    public function getVaga() : object;
    public function delete(int $id) : array;
    public function save(array $data) : object;
    public function update(object $data) : object;
    
}
