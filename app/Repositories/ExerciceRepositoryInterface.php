<?php

namespace App\Repositories;

interface ExerciceRepositoryInterface
{
    public function getAll($filter = null);

    public function findOne(string $id);

    public function new($request);

    public function update($request);

    public function delete(string $id);
    
}
