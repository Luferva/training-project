<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(StoreCategoryRequest $request)
    {
        $result = Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Categoria criada com sucesso' : 'Erro ao criar categoria'
        ]);
    }
    
    public function update(UpdateCategoryRequest $request)
    {
        $result = Category::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Categoria atualizada com sucesso' : 'Erro ao atualizar categoria'
        ]);
    }

    
    public function destroy(Category $category)
    {
        $result = $category->delete();

        return response()->json([
            'success' => $result,
            'message' => $result ? 'Categoria excluida com sucesso' : 'Erro ao excluir categoria'
        ]);
    }
}
