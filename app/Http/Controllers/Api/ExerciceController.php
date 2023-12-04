<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ExerciceService;
use Illuminate\Http\Request;

class ExerciceController extends Controller
{
    public function __construct(
        protected ExerciceService $exerciceService
    ) {}

    public function index()
    {
        return $this->exerciceService->getAll();
    }
    
    public function store(Request $request)
    {
        return $this->exerciceService->new($request);
    }

    public function show(string $id)
    {
        return $this->exerciceService->findOne($id);
    }

    public function update(Request $request)
    {
        return $this->exerciceService->update($request);
    }

    public function destroy(string $id)
    {
        return $this->exerciceService->delete($id);
    }
}
