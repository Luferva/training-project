<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExerciceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id' => 'required|integer|exists:exercices,id',
            'name' => 'required|string|max:255',
            'id_main_muscle' => 'required|integer|exists:main_muscles,id',
            'id_category' => 'required|integer|exists:categories,id',
            'guide_link' => 'required|string|max:255',
        ];
    }
}
