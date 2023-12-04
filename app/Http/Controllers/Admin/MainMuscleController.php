<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainMuscle;
use App\Http\Requests\StoreMainMuscleRequest;
use App\Http\Requests\UpdateMainMuscleRequest;

class MainMuscleController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreMainMuscleRequest $request)
    {
        $result = MainMuscle::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Músculo principal criado com sucesso' : 'Erro ao criar músculo principal'
        ]);
    }

    public function update(UpdateMainMuscleRequest $request)
    {
        $result = MainMuscle::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Músculo principal atualizado com sucesso' : 'Erro ao atualizar músculo principal'
        ]);
    }

    public function destroy(MainMuscle $mainMuscle)
    {
        $result = $mainMuscle->delete();

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Músculo principal excluído com sucesso' : 'Erro ao excluir másculo principal'
        ]);
    }
}
