<?php

namespace App\Repositories;

use App\Models\Exercice;

class ExerciceEloquentORM implements ExerciceRepositoryInterface
{
    public function __construct( protected Exercice $model )
    {

    }

    public function getAll($filter = null)
    {
        $exercices = $this->model->where('name', 'like', '%' . $filter . '%')->get();
    }

    public function findOne(string $id)
    {
        $exercice = $this->model->find($id);

        return $exercice ? (object)$exercice->toArray() : null;
    }

    public function new($request)
    {
        $result = $this->model->create([
            'name' => $request->name,
            'id_main_muscle' => $request->id_main_muscle,
            'id_category' => $request->id_category,
            'guide_link' => $request->guide_link
        ]);

        return $result;
    }

    public function update($request)
    {
        $result = $this->model->find('id', $request->id)->create([
            'name' => $request->name,
            'id_main_muscle' => $request->id_main_muscle,
            'id_category' => $request->id_category,
            'guide_link' => $request->guide_link
        ]);

        return $result;
    }

    public function delete(string $id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}
