<?php

namespace App\Http\Requests\Admin\ProductCategories;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
            'description' =>  'required|string|min:3',
            'is_home_page' => 'nullable|boolean',
        ];
    }
    public function attributes(): array
    {
        return [
            'name' => 'İsim',
            'description' => 'Açıklama',
        ];
    }
}
