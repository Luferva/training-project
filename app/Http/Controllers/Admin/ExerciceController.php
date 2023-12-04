<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exercice;
use App\Http\Requests\StoreExerciceRequest;
use App\Http\Requests\UpdateExerciceRequest;

class ExerciceController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(StoreExerciceRequest $request)
    {
        $result = Exercice::create([
            'name' => $request->name,
            'id_main_muscle' => $request->id_main_muscle,
            'id_category' => $request->id_category,
            'guide_link' => $request->guide_link
        ]);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Exercício criado com sucesso' : 'Erro ao criar exercício'
        ]);
    }

    public function show(Exercice $exercice)
    {
        
    }

    public function edit(Exercice $exercice)
    {
        
    }

    public function update(UpdateExerciceRequest $request,)
    {
        $result = Exercice::where('id', $request->id)->update([
            'name' => $request->name,
            'id_main_muscle' => $request->id_main_muscle,
            'id_category' => $request->id_category,
            'guide_link' => $request->guide_link
        ]);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Exercício atualizado com sucesso' : 'Erro ao atualizar exercício'
        ]);
    }

    public function destroy(Exercice $exercice)
    {
        $result = $exercice->delete();

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Exercício excluído com sucesso' : 'Erro ao excluir exercício'
        ]);
    }
}
