<?php

namespace App\Services;

use App\Repositories\ExerciceRepositoryInterface;

class ExerciceService
{
    public function __construct(protected ExerciceRepositoryInterface $respository)
    {

    }

    public function getAll(string $filter = null)
    {
        return $this->respository->getAll($filter);
    }

    public function findOne($id)
    {
        return $this->respository->findOne($id);
    }

    public function new($request)
    {
        return $this->respository->new($request);
    }

    public function update($request)
    {
        return $this->respository->update($request);
    }

    public function delete($id)
    {
        return $this->respository->delete($id);
    }

}